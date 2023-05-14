@extends('base')
@section('title', 'Dashbord')
@section('content')
<h1> APC</h1>
<div class="d-flex justify-content-center">
    <a href="{{ route('app_create_project') }}" class="btn btn-primary">Ajouter un projet</a>
  </div>



@endsection
