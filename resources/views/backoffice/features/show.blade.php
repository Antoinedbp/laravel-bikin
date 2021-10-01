@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Features
        </div>
        <div class="card-body">
            <img src="{{$features->img}}" class="card-text" alt="">
            <h5 class="card-title">{{$features->titre}}</h5>
            <p class="card-text">{{$features->sous_titre}}</p>
            <p class="card-text">{{$features->description1}}</p>
            <p class="card-text">{{$features->description2}}</p>
            <p class="card-text">{{$features->description3}}</p>
            <div class="d-flex justify-content-center">
                <a href="{{route('features.edit', $features->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection