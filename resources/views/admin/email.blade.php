@extends('layouts.admin')

@section('title', 'Emails')

@section('content')
<div class="title">
  <h1>Emails</h1>
</div>
<form action="/email/{{$contact->contact_id}}" id="myForm" method="POST" name="myForm" class="form margin-bot">
  <label>Nom :</label>
  <a class="under-line">{{ $contact->contact_firstname}} {{ $contact->contact_name}}</a>
  <label>Object</label>
  <a class="under-line">{{ $contact->contact_object}}</a>
  <label>Message</label>
  <a class="under-line">{{ $contact->contact_message}}</a>
  @csrf
  <label for="response">Réponse :</label>
  <input required type="text" name="response" value="{{ old('response') }}">
  <button type="submit" class="btn">Envoyer mon message</button>
</form>
@stop