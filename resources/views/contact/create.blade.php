<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
	<title>Formulaire</title>
</head>
<body>
<h1>contactez nous !</h1>
<div class="container">
	<form action"contact" method="POST" class="form">
	    @csrf
	    <input type="text" class"form-control @error('name') {{--is-invalid--}} @enderror" name="name" placeholder="Nom" value="{{ old('name') }}">
	        @error('name')
	            <div class="invalid-feedback">
	                {{ $errors->first('name')}}
	            </div>
	        @enderror
		<input type="text" class"form-control @error('firstname') {{--is-invalid--}} @enderror" name="firstname" placeholder="Prénom" value="{{ old('firstname') }}">
	        @error('firstname')
	            <div class="invalid-feedback">
	                {{ $errors->first('firstname')}}
	            </div>
	        @enderror
	    <input type="email" class="form-control" @error('email') {{--is-invalid--}} @enderror" name="email" placeholder="Votre email..." value="{{ old('email') }}">
	        @error('email')
	            <div class="invalid-feedback">
	                {{ $errors->first('email')}}
	            </div>
			@enderror

		<label for="select">Choisir une option :</label>
	    <select class="form-control" @error('select') {{--is-invalid--}} @enderror" name="select" value="{{ old('select') }}">
			<option value="">Professionnel</option>
			<option value="first">Particulier</option>
			@error('select')
	            <div class="invalid-feedback">
	                {{ $errors->first('select')}}
	            </div>
	        @enderror
	    <textarea name="message"  cols="30" rows="10" class="form-control @error('message') {{--is-invalid--}} @enderror" placeholder="Votre message..."> {{  old('message') }}</textarea>
	    @error ('message')
	    <div class="invalid-feedback">
	        {{ $errors->first('message')}}
	    </div>
	    @enderror
	    <button type="submit" class="btn btn-primary">Envoyer mon message</button>
	</form>
</div>
</body>

<script href="{{ asset('js/app.js') }}"></script>


</html>