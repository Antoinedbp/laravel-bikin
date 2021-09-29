@extends('template.back')

@section('contentBO')

    <h1>Modifier Testimonial</h1>
    <br>
    @can('create', \App\Models\Testimonial::class)
        <form action="{{route('testimonials.update', $testimonials->id)}}" method="POST">
            @csrf
            @method('PUT')
            Location: <input type="text" name="location" value="{{$testimonials->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$testimonials->locaDescription}}">
            Email: <input type="text" name="email" value="{{$testimonials->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$testimonials->emailDescription}}">
            call: <input type="text" name="call" value="{{$testimonials->call}}">
            Description call: <input type="text" name="callDescription" value="{{$testimonials->callDescription}}">
            Source: <input type="text" name="src" value="{{$testimonials->src}}">
        </form>
    @endcan

@endsection

