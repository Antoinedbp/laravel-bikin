@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            About
            </div>
            <div class="card-body">
                {{ dd($about) }}
                <p class="card-text">{{$about->chemin}}</p>
                <p class="card-text">{{$about->logo}}</p>
                <h5 class="card-title">{{$about->titre}}</h5>
                <p class="card-text">{{$about->description}}</p>
                {{-- <div class="d-flex justify-content-center">
                    <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-info">EDIT</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection