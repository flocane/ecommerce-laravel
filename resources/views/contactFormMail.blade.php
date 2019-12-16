@component('mail::message')


<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
   <td>
    <h2><strong>Soporte al Cliente Lavadero LavaBien-Caso [Codigo Seguimiento]</strong></h2>
   </td>
    </tr>
    <tr>
   <td style="padding: 20px 0 30px 0;">
    <p>La siguiente consulta ha sido derivada:<br><br> <strong>Nombre del Cliente: </strong>{{$data['nombre']}}<br>
        <strong>E-mail: </strong> {{$data['email']}}<br>
     <strong>Telefono: </strong>  {{$data['telefono']}} <br>
    </p>
    <p><strong>Mensaje: </strong>{{$data['mensaje']}} <br></p>

   </td>
    </tr>
   </table>


@endcomponent

{{-- @component('mail::button', ['url' => ''])



Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
