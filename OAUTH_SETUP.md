# OAuth Setup Guide

This application supports OAuth authentication with Google and GitHub. Follow these steps to configure the OAuth providers.

## Prerequisites

- Laravel Socialite is already installed
- Database migrations have been run

## Google OAuth Setup

1. Go to the [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select an existing one
3. Enable the Google+ API
4. Go to "Credentials" and create an OAuth 2.0 Client ID
5. Set the authorized redirect URI to: `http://your-domain.com/guest/auth/google/callback`
6. Copy the Client ID and Client Secret

## GitHub OAuth Setup

1. Go to [GitHub Developer Settings](https://github.com/settings/developers)
2. Click "New OAuth App"
3. Fill in the application details:
   - Application name: Your app name
   - Homepage URL: `http://your-domain.com`
   - Authorization callback URL: `http://your-domain.com/guest/auth/github/callback`
4. Copy the Client ID and Client Secret

## Environment Configuration

Add the following variables to your `.env` file:

```env
# Google OAuth
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://your-domain.com/guest/auth/google/callback

# GitHub OAuth
GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT_URI=http://your-domain.com/guest/auth/github/callback
```

## Features

- **One Email, One Account**: Users with the same email address will be linked to the same account regardless of the OAuth provider used
- **Multiple Provider Support**: Users can link multiple OAuth providers to their account
- **Automatic Email Verification**: OAuth users are automatically marked as email verified
- **Secure Token Storage**: OAuth tokens are securely stored in the database

## Routes

- Google OAuth: `/guest/auth/google/redirect` and `/guest/auth/google/callback`
- GitHub OAuth: `/guest/auth/github/redirect` and `/guest/auth/github/callback`

## Database Structure

The OAuth implementation uses two main tables:

1. **users** - Standard user table with nullable password for OAuth users
2. **oauth_providers** - Stores OAuth provider information and tokens

### OAuth Providers Table Schema

- `user_id` - Foreign key to users table
- `provider` - OAuth provider name (google, github, etc.)
- `provider_user_id` - User ID from the OAuth provider
- `access_token` - OAuth access token
- `refresh_token` - OAuth refresh token (if available)
- `expires_at` - Token expiration timestamp

## Usage

Users can authenticate using either Google or GitHub OAuth. The system will:

1. Check if the OAuth account is already linked to a user
2. If not linked, check if a user with the same email exists
3. If user exists, link the OAuth provider to the existing account
4. If no user exists, create a new user and link the OAuth provider
5. Log the user in and redirect to the dashboard
