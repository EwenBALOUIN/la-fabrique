<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
	<title>Formulaire</title>
</head>
<body>
<h1 id="contactTitle">contactez nous !</h1>
@if (session()->has('messagesuccess'))
	<div class="alert alert-success" role="alert">
		{{ session()->get('messagesuccess')}}
	</div>
@endif
<div class="container">
	<form action"contact" id="myForm" method="POST" name="myForm" class="form">
		@csrf

		<label for="name">Nom :</label>
	    <input required type="text" @error('name') {{--is-invalid--}} @enderror" name="name" value="{{ old('name') }}">
	        @error('name')
	            <div class="invalid-feedback">
	                {{ $errors->first('name')}}
	            </div>
			@enderror

		<label for="firstname">Prénom :</label>
		<input required type="text"  @error('firstname') {{--is-invalid--}} @enderror" name="firstname"  value="{{ old('firstname') }}">
	        @error('firstname')
	            <div class="invalid-feedback">
	                {{ $errors->first('firstname')}}
	            </div>
			@enderror

			<label for="object">Objet :</label>
		<input required type="text"  @error('object') {{--is-invalid--}} @enderror" name="object"  value="{{ old('object') }}">
	        @error('object')
	            <div class="invalid-feedback">
	                {{ $errors->first('object')}}
	            </div>
	        @enderror

		<label for="email">e-mail :</label>
	    <input required type="email"  @error('email') {{--is-invalid--}} @enderror" name="email" value="{{ old('email') }}">
	        @error('email')
	            <div class="invalid-feedback">
	                {{ $errors->first('email')}}
	            </div>
			@enderror

		<label for="select">Choisir une option :</label>
		<select required @error('select') {{--is-invalid--}} @enderror" name="select" value="{{ old('select') }}">
			<option value="">Choisir</option>
			<option value="first">Professionnel</option>
			<option value="second">Particulier</option>
			@error('select')
	            <div class="invalid-feedback">
	                {{ $errors->first('select')}}
	            </div>
	        @enderror
		</select>

		<label for="message">Message :</label>
		<textarea name="message" required  cols="30" rows="10"  @error('message') {{--is-invalid--}} @enderror" > {{  old('message') }}</textarea>
	    @error ('message')
	    <div class="invalid-feedback">
	        {{ $errors->first('message')}}
	    </div>
	    @enderror
		<button type="submit" class="btn">Envoyer mon message</button>
	</form>
</div>
</body>

</html>