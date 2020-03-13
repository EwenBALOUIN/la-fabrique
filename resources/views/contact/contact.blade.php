@if (session()->has('messagesuccess'))
    <div class="alert alert-success" style="text-align: center;" role="alert">
        {{ session()->get('messagesuccess')}}
    </div>
@elseif (session()->has('messagefailed'))
    <div class="alert alert-danger" style="text-align: center;" role="alert">
        {{ session()->get('messagefailed')}}
    </div>
@endif
<div class="container">
    <form action="/" id="myForm" method="POST" name="myForm" class="formContact">
    @csrf

    <label class="labelContact" for="name">Nom :</label>
    <input class="inputContact" required type="text" @error('name') @enderror" name="name" value="{{ old('name') }}">
    @error('name')
    <div class="invalid-feedback">
        {{ $errors->first('name')}}
    </div>
    @enderror

    <label class="labelContact" for="firstname">Prénom :</label>
    <input class="inputContact" required type="text" @error('firstname') @enderror" name="firstname"  value="{{ old('firstname') }}">
    @error('firstname')
    <div class="invalid-feedback">
        {{ $errors->first('firstname')}}
    </div>
    @enderror

    <label class="labelContact" for="object">Objet :</label>
    <input class="inputContact" required type="text" @error('object') {{--is-invalid--}} @enderror" name="object"  value="{{ old('object') }}">
    @error('object')
    <div class="invalid-feedback">
        {{ $errors->first('object')}}
    </div>
    @enderror

    <label class="labelContact" for="email">e-mail :</label>
    <input class="inputContact" required type="email" @error('email') {{--is-invalid--}} @enderror" name="email" value="{{ old('email') }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $errors->first('email')}}
    </div>
    @enderror

    <label for="select" class="labelContact">Choisir une option :</label>
    <select class="selectContact" required @error('select') {{--is-invalid--}} @enderror" name="select" value="{{ old('select') }}">
    <option value="">Choisir</option>
    <option value="first">Professionnel</option>
    <option value="second">Particulier</option>
    @error('select')
    <div class="invalid-feedback">
        {{ $errors->first('select')}}
    </div>
    @enderror
    </select>

    <label class="labelContact" for="message">Message :</label>
    <textarea class="textareaContact" name="message" required  cols="30" rows="10" @error('message') @enderror" > {{  old('message') }}</textarea>
    @error ('message')
    <div class="invalid-feedback">
        {{ $errors->first('message')}}
    </div>
    @enderror
    <button type="submit" class="btnContact">Envoyer mon message</button>
    </form>
</div>
