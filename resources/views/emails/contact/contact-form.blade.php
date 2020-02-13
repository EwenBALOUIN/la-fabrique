@component('mail::message')
#Le client {{ $name }} nous à contacter à l'adresse suivante {{ $email }}
Voici son message : {{ $message }}
@endcomponent
