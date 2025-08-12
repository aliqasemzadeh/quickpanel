@component('mail::message')
# Welcome to {{ config('app.name') }}

Hello {{ $name }},

Your account has been successfully created using OAuth authentication. Here are your account details:

**Email:** {{ $email }}  
**Default Password:** {{ $password }}

## Important Security Notice

For your security, we recommend changing your password immediately after your first login.

@component('mail::button', ['url' => route('login')])
Login to Your Account
@endcomponent

## Next Steps

1. Use the login button above to access your account
2. Navigate to your profile settings
3. Change your password to something secure and memorable

If you have any questions or need assistance, please don't hesitate to contact our support team.

Thanks,<br>
{{ config('app.name') }} Team

---
*This is an automated message. Please do not reply to this email.*
@endcomponent
