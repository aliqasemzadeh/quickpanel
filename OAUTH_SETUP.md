# OAuth Setup Guide

This guide explains how to set up OAuth authentication for GitHub and Google in your Laravel application.

## Prerequisites

- Laravel Socialite is already installed (`laravel/socialite`)
- Database migration has been run to add OAuth fields to users table

## GitHub OAuth Setup

### 1. Create GitHub OAuth App

1. Go to [GitHub Developer Settings](https://github.com/settings/developers)
2. Click "New OAuth App"
3. Fill in the following details:
   - **Application name**: Your app name
   - **Homepage URL**: `http://localhost:8000` (for development)
   - **Authorization callback URL**: `http://localhost:8000/guest/auth/github/callback`

### 2. Add Environment Variables

Add the following to your `.env` file:

```env
GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT_URI=http://localhost:8000/guest/auth/github/callback
```

## Google OAuth Setup

### 1. Create Google OAuth App

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select existing one
3. Enable the Google+ API
4. Go to "Credentials" → "Create Credentials" → "OAuth 2.0 Client IDs"
5. Configure the OAuth consent screen
6. Set up the OAuth client:
   - **Application type**: Web application
   - **Authorized redirect URIs**: `http://localhost:8000/guest/auth/google/callback`

### 2. Add Environment Variables

Add the following to your `.env` file:

```env
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://localhost:8000/guest/auth/google/callback
```

## How It Works

### User Authentication Flow

1. **Existing User**: If a user with the same email exists, they are logged in directly
2. **New User**: If no user exists:
   - A new user account is created with a random password
   - OAuth provider information is stored
   - A welcome email is sent with the default password
   - User is automatically logged in

### Features

- **Email Verification**: OAuth users are automatically email-verified
- **Avatar Support**: User avatars from OAuth providers are stored
- **Provider Linking**: Users can link multiple OAuth accounts to the same email
- **Security**: Random passwords are generated for new OAuth users
- **Email Notifications**: Welcome emails with default passwords are sent

### Routes

- **GitHub**: 
  - Redirect: `/guest/auth/github/redirect`
  - Callback: `/guest/auth/github/callback`
- **Google**:
  - Redirect: `/guest/auth/google/redirect`
  - Callback: `/guest/auth/google/callback`

### Database Schema

The users table now includes:
- `provider`: OAuth provider name (github, google)
- `provider_id`: Unique ID from the OAuth provider
- `avatar`: User avatar URL from OAuth provider

## Testing

1. Start your Laravel development server: `php artisan serve`
2. Visit the login page
3. Click on GitHub or Google login buttons
4. Complete the OAuth flow
5. Check the Laravel log file for email content (since mail is set to 'log' driver)

## Production Deployment

For production, make sure to:

1. Update OAuth callback URLs to your production domain
2. Configure proper mail settings in `.env`
3. Set up proper SSL certificates
4. Update environment variables with production OAuth credentials 
