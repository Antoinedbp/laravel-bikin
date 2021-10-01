@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            About
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$abouts->titre}}</h5>
                <p class="card-text">{{$abouts->description}}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('abouts.edit', $abouts->id)}}" class="btn btn-info">EDIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection