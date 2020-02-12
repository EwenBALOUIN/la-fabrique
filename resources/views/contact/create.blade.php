<head>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<h1> Contactez-Nous !</h1>
<div class="container">
	<form action"contact" method="POST">
	    @csrf
	    <input type="text" class"form-control @error('name') is-invalid @enderror" name="name" placeholder="Nom" value="{{ old('name') }}">
	        @error('name')
	            <div class="invalid-feedback">
	                {{ $errors->first('name')}}
	            </div>
	        @enderror
		<input type="text" class"form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Prénom" value="{{ old('firstname') }}">
	        @error('firstname')
	            <div class="invalid-feedback">
	                {{ $errors->first('firstname')}}
	            </div>
	        @enderror
	    <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email" placeholder="Votre email..." value="{{ old('email') }}">
	        @error('email')
	            <div class="invalid-feedback">
	                {{ $errors->first('email')}}
	            </div>
			@enderror
		<label for="select">Choisir une option :</label>
	    <select class="form-control" @error('select') is-invalid @enderror" name="select" value="{{ old('select') }}">
			<option value="">Professionnel</option>
			<option value="first">Particulier</option>
			@error('select')
	            <div class="invalid-feedback">
	                {{ $errors->first('select')}}
	            </div>
	        @enderror
	    <textarea name="message"  cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" placeholder="Votre message..."> {{  old('message') }}</textarea>
	    @error ('message')
	    <div class="invalid-feedback">
	        {{ $errors->first('message')}}
	    </div>
	    @enderror
	    <button type="submit" class="btn btn-primary">Envoyer mon message</button>
	</form>
</div>