
@if (session()->has('messagesuccess'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('messagesuccess')}}
    </div>
@endif
<div class="container">
    <form action="contact" id="myForm" method="POST" name="myForm" class="form">
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
