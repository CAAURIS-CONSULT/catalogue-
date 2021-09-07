@component('mail::message')
# Message  d'un Visiteur du Catalogue<br>

<h3>Information du visiteur</h3>
Nom Visiteur : <strong>{{ $cltNom }}</strong> <br>
Objet Msg  : <strong>{{ $obj }}</strong> <br>
Mail visiteur  : <strong>{{ $mail}}</strong> <br>
Date  : <strong>{{ date("d-m-Y H:i:s") }}</strong> <br>
<p>
<h3>Corps du message</h3>

	{{ $text }}
	
</p>


Merci,<br>
{{ config('app.name') }}
@endcomponent
