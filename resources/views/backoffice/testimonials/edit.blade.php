@extends('template.back')

@section('contentBO')

<h1 class="text-center">Modifier TESTIMONIALS</h1>
<br>

    <form class="container" action="{{route('testimonials.update', $testimonial->id)}}" method="POST">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @csrf
        @method('PUT')
        description: <input type="text" name="description" value="{{$testimonial->description}}">
        photo: <input type="text" name="photo" value="{{$testimonial->photo}}">
        nom: <input type="text" name="nom" value="{{$testimonial->nom}}">
        statut: <input type="text" name="statut" value="{{$testimonial->statut}}">
        <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
    </form>

@endsection

