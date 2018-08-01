@component('mail::message')
 # Hola, en este correo te informando sobre, {{ $data['subject'] }}

@component('mail::promotion')
	{{ $data['message'] }}
@endcomponent

Att el equipo de,
{{ config('app.name') }}
@endcomponent