@extends('base')
@section('title', 'project')
@section('content')

<div class="contaniner">
    <div class="row">
        <div class = "col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5"> Ajouter un projet</h1>
            <p class="text-center text-muted mb-5"> Créer un projet si vous portez un projet pour votre APC</p>
            <form method = "POST" action="{{ route('projects.store')}}" class="row g-3" id="form-project">
                @csrf
                <div class="col-md-6">
                    <label for="titre" class="form-label">Titre du projet</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre')}}" required autocomplete="titre" autofocus >
                    <small class="text-danger fw-bold" id="error-register-titre"> </small>
                </div>
                <div class="col-md-6">
                    <label for="prop" class="form-label">Proprétaire du projet</label>
                    <input type="text" class="form-control" id="prop" name="prop" value="{{old('prop')}}" required autocomplete="prop" autofocus >
                    <small class="text-danger fw-bold" id="error-register-prop"> </small>
                </div>
                <div class="col-md-6">
                    <label for="lieu" class="form-label">Lieu du projet</label>
                    <input type="text" class="form-control" id="lieu" name="lieu" value="{{old('lieu')}}" required autocomplete="lieu" autofocus >
                    <small class="text-danger fw-bold" id="error-register-lieu"> </small>
                </div>
                 <div class="col-md-6">
                    <label for="commune" class="form-label">Commune</label>
                    <input type="text" class="form-control" id="commune" name="commune" value="{{old('commune')}}" required autocomplete="commune" autofocus >
                    <small class="text-danger fw-bold" id="error-register-commune"> </small>
                </div>
                 <div class="col-md-6">
                    <label for="wilaya" class="form-label">Wilaya</label>
                    <input type="text" class="form-control" id="wilaya" name="wilaya" value="{{old('wilaya')}}" required autocomplete="wilaya" autofocus >
                    <small class="text-danger fw-bold" id="error-register-wilaya"> </small>
                </div>

                <div class="col-md-10 mt-10 mb-10">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="5" required autocomplete="desc" autofocus>{{ old('desc') }}</textarea>
                    <small class="text-danger fw-bold" id="error-register-desc"> </small>
                </div>

                <div class="col-md-6">
                    <label for="datedeb" class="form-label">Date début de l'enquête</label>
                    <input type="date" class="form-control" id="datedeb" name="datedeb" value="{{old('datedeb')}}" required autocomplete="datedeb"  >
                    <small class="text-danger fw-bold" id="error-register-datedeb"> </small>
                </div>
                <div class="col-md-6">
                    <label for="datefin" class="form-label">Date de fin de l'enquête</label>
                    <input type="date" class="form-control" id="datefin" name="datefin" value="{{old('datefin')}}" required autocomplete="datefin"  >
                    <small class="text-danger fw-bold" id="error-register-datefin"> </small>
                </div>
                <div>
                    <label for="photo"> La photo du projet : </label> <br>
                    <input type="file" id="photo"  name="photo" multiple  value="{{old('photo')}}" required autocomplete="photo"><
                    <small class="text-danger fw-bold" id="error-register-photo"> </small>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="valide">
                    <label class="form-check-label" for="valide">
                      Validez le formulaire
                    </label>
                    <small class="text-danger fw-bold" id="error-register-valide"> </small>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" id="register-project">Enregistrer </button>

                  </div>
                  <p class="text-center text-muted mt-5"> si vous ne souhaitez pas créer un projet<a href="{{route('app_dashbord')}}"> retour </a></p>
            </form>
        </div>

    </div>
</div>


@endsection
