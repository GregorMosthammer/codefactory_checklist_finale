@component('mail::message')
# Thanks  

i dont know what i should write here :D
<bR>
**test**  _test_

@component('mail::button', ['url' => 'http://127.0.0.1:8000/checklist'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
