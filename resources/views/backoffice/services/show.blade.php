@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Services
        </div>
        <div class="card-body">
            <div class="icon"><i class="{{ $services->logo }}"></i></div>
            <h5 class="card-title">{{$services->titre}}</h5>
            <p class="card-text">{{$services->description}}</p>
            <div class="d-flex justify-content-center">
                <a href="{{route('services.edit', $services->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection