<?php

use App\Models\OAuthProvider;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as SocialiteUser;

uses(RefreshDatabase::class);

test('oauth providers table has correct structure', function () {
    $this->artisan('migrate');
    
    $this->assertDatabaseHasTable('oauth_providers');
    $this->assertDatabaseHasTable('users');
});

test('oauth service can handle new user registration', function () {
    $this->artisan('migrate');
    
    // Mock Socialite user
    $socialiteUser = new SocialiteUser();
    $socialiteUser->id = '12345';
    $socialiteUser->name = 'John Doe';
    $socialiteUser->email = 'john@example.com';
    $socialiteUser->token = 'access_token_123';
    $socialiteUser->refreshToken = 'refresh_token_123';
    $socialiteUser->expiresIn = 3600;
    
    $oauthService = new \App\Services\OAuthService();
    
    // Mock Auth facade
    Auth::shouldReceive('login')->once();
    
    $response = $oauthService->handleOAuthCallback('google', $socialiteUser);
    
    // Check that user was created
    $this->assertDatabaseHas('users', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'email_verified_at' => now(),
    ]);
    
    // Check that OAuth provider was created
    $this->assertDatabaseHas('oauth_providers', [
        'provider' => 'google',
        'provider_user_id' => '12345',
    ]);
});

test('oauth service can link existing user to new provider', function () {
    $this->artisan('migrate');
    
    // Create existing user
    $user = User::factory()->create([
        'email' => 'john@example.com',
    ]);
    
    // Mock Socialite user
    $socialiteUser = new SocialiteUser();
    $socialiteUser->id = '12345';
    $socialiteUser->name = 'John Doe';
    $socialiteUser->email = 'john@example.com';
    $socialiteUser->token = 'access_token_123';
    $socialiteUser->refreshToken = 'refresh_token_123';
    $socialiteUser->expiresIn = 3600;
    
    $oauthService = new \App\Services\OAuthService();
    
    // Mock Auth facade
    Auth::shouldReceive('login')->once();
    
    $response = $oauthService->handleOAuthCallback('github', $socialiteUser);
    
    // Check that OAuth provider was linked to existing user
    $this->assertDatabaseHas('oauth_providers', [
        'user_id' => $user->id,
        'provider' => 'github',
        'provider_user_id' => '12345',
    ]);
    
    // Check that no new user was created
    $this->assertDatabaseCount('users', 1);
});
