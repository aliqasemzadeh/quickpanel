<?php

namespace App\Http\Controllers\Guest\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DefaultPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Check if user exists
            $user = User::where('email', $googleUser->getEmail())->first();
            
            if ($user) {
                // User exists, log them in
                Auth::login($user);
                return redirect()->intended(route('user.dashboard.index'));
            }
            
            // User doesn't exist, create new user
            $password = Str::random(12);
            
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => Hash::make($password),
                'avatar' => $googleUser->getAvatar(),
                'email_verified_at' => now(), // Google emails are verified
            ]);
            
            // Send email with default password
            Mail::to($user->email)->send(new DefaultPasswordMail(
                $user->name,
                $user->email,
                $password
            ));
            
            // Log in the new user
            Auth::login($user);
            
            return redirect()->intended(route('user.dashboard.index'))->with('success', 'Account created successfully! Please check your email for your default password.');
            
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Google authentication failed. Please try again.');
        }
    }
}
