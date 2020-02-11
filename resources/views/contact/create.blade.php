<h1> Contactez-Nous !</h1>

<div class="form-group">
    <input type="text" class"form-control @error('name') is-invalid @enderror" name="name"
    placeholder="Rentrez un pseudo..." value="{{ old('name') }}">
    @error('name')
        <div class="invalid-feedback">
            {{ $error->first('name')}}
        </div>
    @enderror
</div>
<div class="form-group">
    <input type="email" class="form-control" @error('email') is-invalid @enderror" name="emmail"
    placeholder="Rentrez un mail..." value="{{ old('email') }}">  
    @error('email')
        <div class="invalid-feedback">
            {{ $error->first('email')}}
        </div>
    @enderror
</div>
<div class="form-group">
    <textarea name="message" placeholder="Votre message..." cols="30" rows="10" class="form-control @error('message') is-invalid
@enderror"> {{  old('message') }}</textarea>
@error ('message')
<div class="invalid-feedback">
    {{ $error->first('message')}}
</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Envoyer mon message</button>
