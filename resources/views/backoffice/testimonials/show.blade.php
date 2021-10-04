@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            Testimonials
            </div>
            <div class="card-body">
                <p class="card-text">{{$testimonial->description}}</p>
                <img src="{{$testimonial->photo}}" alt="">
                <h5 class="card-title">{{$testimonial->nom}}</h5>
                <p class="card-text">{{$testimonial->statut}}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('testimonials.edit', $testimonial->id)}}" class="btn btn-info">EDIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection