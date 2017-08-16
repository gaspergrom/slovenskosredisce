@component('mail::message')
# Kontakt osebe: {{ $name }}

{{ $content }}

@component('mail::button', ['url' => 'mailto:'.$email])
Odgovori
@endcomponent

@endcomponent
