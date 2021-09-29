@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$testimonials->id}}</h4>
            <h3 class="card-title">{{$testimonials->titre}}</h3>
            <h3 class="card-title">{{$testimonials->description}}</h3>
            <form action="{{route('testimonials.destroy', $testimonials->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('testimonials.edit', $testimonials->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection