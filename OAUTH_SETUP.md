# OAuth Setup Guide

This guide explains how to set up OAuth authentication for GitHub and Google in your Laravel application.

## Prerequisites

- Laravel Socialite is already installed and configured
- Mail configuration is set up in your `.env` file

## Environment Variables

Add the following variables to your `.env` file:

### GitHub OAuth
```
GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT_URI=http://your-domain.com/guest/auth/github/callback
```

### Google OAuth
```
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://your-domain.com/guest/auth/google/callback
```

### Mail Configuration
```
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

## OAuth Provider Setup

### GitHub Setup
1. Go to GitHub Settings > Developer settings > OAuth Apps
2. Click "New OAuth App"
3. Fill in the details:
   - Application name: Your app name
   - Homepage URL: http://your-domain.com
   - Authorization callback URL: http://your-domain.com/guest/auth/github/callback
4. Copy the Client ID and Client Secret to your `.env` file

### Google Setup
1. Go to Google Cloud Console
2. Create a new project or select existing one
3. Enable Google+ API
4. Go to Credentials > Create Credentials > OAuth 2.0 Client IDs
5. Configure the OAuth consent screen
6. Set the authorized redirect URIs to: http://your-domain.com/guest/auth/google/callback
7. Copy the Client ID and Client Secret to your `.env` file

## How It Works

### User Flow
1. User clicks "Sign in with GitHub/Google" button
2. User is redirected to the OAuth provider
3. User authorizes the application
4. User is redirected back to your application
5. The system checks if the user exists:
   - If exists: User is logged in and redirected to dashboard
   - If not exists: New user is created with a random password, email is sent with the password, and user is logged in

### Features
- **User Existence Check**: The system checks if a user with the OAuth email already exists
- **Automatic Login**: Existing users are automatically logged in
- **User Creation**: New users are created with OAuth data (name, email, avatar)
- **Email Verification**: OAuth emails are automatically marked as verified
- **Password Generation**: Random 12-character passwords are generated for new users
- **Email Notification**: New users receive an email with their default password
- **Security**: Users are encouraged to change their password after first login

## Routes

The following routes are available:
- `GET /guest/auth/github/redirect` - Redirect to GitHub OAuth
- `GET /guest/auth/github/callback` - Handle GitHub OAuth callback
- `GET /guest/auth/google/redirect` - Redirect to Google OAuth
- `GET /guest/auth/google/callback` - Handle Google OAuth callback

## Email Template

The default password email uses a markdown template located at `resources/views/emails/default-password.blade.php`. The template includes:
- Welcome message
- Account details (email and password)
- Security notice
- Login button
- Next steps instructions

## Error Handling

The controllers include proper error handling:
- OAuth failures are caught and user is redirected to login with error message
- Database errors are handled gracefully
- Email sending failures don't prevent user login

## Security Considerations

- OAuth emails are automatically verified
- Random passwords are generated for new users
- Users are encouraged to change passwords after first login
- All OAuth data is properly validated before user creation
