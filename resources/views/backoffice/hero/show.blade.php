@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            Heros
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$hero->chemin}}</h5>
                <div class="d-flex justify-content-center">
                    <a href="{{route('heros.edit', $hero->id)}}" class="btn btn-info">EDIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection