<?php

namespace App\Http\Controllers\Guest\Auth;

use App\Http\Controllers\Controller;
use App\Services\OAuthService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function __construct(
        private OAuthService $oauthService
    ) {}

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
            return $this->oauthService->handleOAuthCallback('github', $githubUser);
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['error' => 'GitHub authentication failed. Please try again.']);
        }
    }
}
