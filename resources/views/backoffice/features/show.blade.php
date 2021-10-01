@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Features
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$features->titre}}</h5>
            <p class="card-text">{{$features->description}}</p>
            <div class="d-flex justify-content-center">
                <a href="{{route('features.edit', $features->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection