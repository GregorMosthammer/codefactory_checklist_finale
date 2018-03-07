@component('mail::message')
# Welcome {{$user->name}}

here is should be the email text  **test**  _test_
@component('mail::panel')
The email address you signed up with is: {{$user->email}}
@endcomponent

@component('mail::button', ['url' => 'http://127.0.0.1:8000/checklist'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
