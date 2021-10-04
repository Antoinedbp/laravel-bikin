@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Titres
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$team->nom}}</h5>
            <p class="card-text">{{$team->photo}}</p>
            <p class="card-text">{{$team->statut}}</p>
            <div class="d-flex justify-content-center">
                <a href="{{route('teams.edit', $team->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection