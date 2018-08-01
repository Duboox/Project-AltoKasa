@component('mail::message')
 # Hola!
<dl>
    <dt>
    	<strong>Solicitante:</strong>: {{ $data['name'] }}
    </dt>
    <dd> 
    	<strong>Correo del Solicicante</strong>: {{ $data['email'] }}
    </dd>
    <dt>Asunto</dt>
    <dd>{{ $data['subject'] }}</dd>
    <dt>Referencia de Propiedad</dt>
    <dd>{{ $data['ref_pro'] }}</dd>
</dl>

@component('mail::promotion')
	{{ $data['message'] }}
@endcomponent

Gracias de parte del equipo,
{{ config('app.name') }}
@endcomponent