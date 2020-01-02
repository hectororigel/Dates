@component('mail::message')

    #New Date {{$dates->name}}

    {{$dates->lastName}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
