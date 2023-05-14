@extends('base')
@section('title', 'login')
@section('content')
<div class="containser">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text muted mb-3 mt-5"> Connectez-vous </h1>
            <p class="text-center text-muted mb-5"> L'assemblé populaire communal est au service des citoyens</p>
            <form method = "POST" action="{{ route('login')}}" >
                @csrf

                @error('email')

                <div class="alert alert-danger" role="alert">
                   {{$message }}
                  </div>
                @enderror

                @error('password')

                <div class="alert alert-danger" role="alert" >
                   {{$message }}
                  </div>
                @enderror
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror"  {{old('email')}}" required autocomplete="email" autofocus>
                <label for="password"> Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror"  required autocomplete="current-password">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{old('remember')? 'checked': ''}}>
                            <label class="form-check-label" for="remember">Enregistrer</label>
                          </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#"> Mot de passe oublié</a>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit"> Se connecter </button>
                </div>
                <p class="text-center text-muted mt-5"> Vous n'avez pas de compte? <a href="{{route('register')}}"> Créer un compte</a></p>

            </form>
        </div>
    </div>
</div>

@endsection
