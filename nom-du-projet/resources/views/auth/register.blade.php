@extends('base')
@section('title', 'Register')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5"> Inscrivez-vous</h1>
            <p class="text-center text-muted mb-5"> Créez un compte si vous n'avez pas de compte</p>
            <form method = "POST" action="{{ route('register')}}" class="row g-3" id="form-register" >
                @csrf

                <div class="col-md-6">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}" required autocomplete="firstname" autofocus >
                    <small class="text-danger fw-bold" id="error-register-firstname"> </small>
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" required autocomplete="lastname"  >
                    <small class="text-danger fw-bold" id="error-register-lastname"> </small>
                  </div>
                  <div class="col-md-12">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required autocomplete="email" url-emailExist = "{{route('app_exist_email')}}" token= "{{csrf_token()}}" >
                    <small class="text-danger fw-bold" id="error-register-email"> </small>
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" required autocomplete="password"  >
                    <small class="text-danger fw-bold" id="error-register-password"> </small>
                  </div>
                  <div class="col-md-6">
                    <label for="password_confirm" class="form-label">Confirmez le Mot de passe</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="{{old('password_confirm')}}" required autocomplete="password_confirm"  >
                    <small class="text-danger fw-bold" id="error-register-password_confirm"> </small>
                  </div>
                  <div class="col-md-6">
                    <label for="commune" class="form-label">Commune</label>
                    <input type="text" class="form-control" id="commune" name="commune" value="{{old('commune')}}" required autocomplete="commune"  >
                    <small class="text-danger fw-bold" id="error-register-commune"> </small>
                  </div>
                  <div class="col-md-6">
                    <label for="wilaya" class="form-label">Wilaya</label>
                    <input type="text" class="form-control" id="wilaya" name="wilaya" value="{{old('wilaya')}}" required autocomplete="wilaya"  >
                    <small class="text-danger fw-bold" id="error-register-wilaya"> </small>
                  </div>
                  <div class="col-md-12">
                    <label for="tel" class="form-label">Numéro de téléphone </label>
                    <input type="text" class="form-control" id="tel" name="tel" value="{{old('tel')}}" required autocomplete="tel"  >
                    <small class="text-danger fw-bold" id="error-register-tel"> </small>
                  </div>
                  <div class="col-md-6">
                    <label for="dateN" class="form-label">Date de Naissance</label>
                    <input type="date" class="form-control" id="dateN" name="dateN" value="{{old('dateN')}}" required autocomplete="dateN"  >
                    <small class="text-danger fw-bold" id="error-register-dateN"> </small>
                  </div>
                  <div class="col-md-6">
                    <label for="lieuN" class="form-label">Lieu de Naissance</label>
                    <input type="text" class="form-control" id="lieuN" name="lieuN" value="{{old('lieuN')}}" required autocomplete="lieuN"  >
                    <small class="text-danger fw-bold" id="error-register-lieuN"> </small>
                  </div>
                  <div class="col-md-12">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{old('adresse')}}" required autocomplete="adresse"  >
                    <small class="text-danger fw-bold" id="error-register-adresse"> </small>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="agreeTerms">
                        <label class="form-check-label" for="agreeTerms">
                          Acceptes-tu les conditions
                        </label>
                        <small class="text-danger fw-bold" id="error-register-agreeTerms"> </small>
                    </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button" id="register-user">Enregistrer </button>

                      </div>
                      <p class="text-center text-muted mt-5"> Si vous avez un compte, conectez-vous directement<a href="{{route('login')}}"> Login </a></p>




            </form>
        </div>
    </div>
</div>

@endsection
