@component('mail::message')
# {{ __('quickpanel.welcome', ['app' => config('app.name')]) }}

{{ __('quickpanel.hello', ['name' => $name]) }},

{{ __('quickpanel.account_created') }}

**{{ __('quickpanel.email') }}:** {{ $email }}
**{{ __('quickpanel.default_password') }}:** {{ $password }}

## {{ __('quickpanel.security_notice') }}

{{ __('quickpanel.security_recommendation') }}

@component('mail::button', ['url' => route('login')])
{{ __('quickpanel.login_button') }}
@endcomponent

## {{ __('quickpanel.next_steps') }}

1. {{ __('quickpanel.step_1') }}
2. {{ __('quickpanel.step_2') }}
3. {{ __('quickpanel.step_3') }}

{{ __('quickpanel.contact_support') }}

{{ __('quickpanel.thanks') }},<br>
{{ __('quickpanel.team', ['app' => config('app.name')]) }}

---
*{{ __('quickpanel.automated_message') }}*
@endcomponent
