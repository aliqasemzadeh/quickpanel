<?php

namespace App\Services;

use App\Models\OAuthProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class OAuthService
{
    /**
     * Handle OAuth authentication for any provider
     */
    public function handleOAuthCallback(string $provider, SocialiteUser $socialiteUser)
    {
        // Check if this OAuth account is already linked to a user
        $existingOAuth = OAuthProvider::where('provider', $provider)
            ->where('provider_user_id', $socialiteUser->getId())
            ->first();
        
        if ($existingOAuth) {
            // User already exists, log them in
            Auth::login($existingOAuth->user);
            return redirect()->intended('/dashboard');
        }
        
        // Check if a user with this email already exists
        $existingUser = User::where('email', $socialiteUser->getEmail())->first();
        
        if ($existingUser) {
            // User exists but not linked to this provider, link them
            OAuthProvider::create([
                'user_id' => $existingUser->id,
                'provider' => $provider,
                'provider_user_id' => $socialiteUser->getId(),
                'access_token' => $socialiteUser->token,
                'refresh_token' => $socialiteUser->refreshToken,
                'expires_at' => $socialiteUser->expiresIn ? now()->addSeconds($socialiteUser->expiresIn) : null,
            ]);
            
            Auth::login($existingUser);
            return redirect()->intended('/dashboard');
        }
        
        // Create new user
        $userName = $socialiteUser->getName();
        if ($provider === 'github' && !$userName) {
            $userName = $socialiteUser->getNickname();
        }
        
        $user = User::create([
            'name' => $userName,
            'email' => $socialiteUser->getEmail(),
            'email_verified_at' => now(), // OAuth emails are verified
            'password' => null, // OAuth users don't need password
        ]);
        
        // Create OAuth provider record
        OAuthProvider::create([
            'user_id' => $user->id,
            'provider' => $provider,
            'provider_user_id' => $socialiteUser->getId(),
            'access_token' => $socialiteUser->token,
            'refresh_token' => $socialiteUser->refreshToken,
            'expires_at' => $socialiteUser->expiresIn ? now()->addSeconds($socialiteUser->expiresIn) : null,
        ]);
        
        Auth::login($user);
        return redirect()->intended('/dashboard');
    }
}
