@extends('template.back')

@section('contentBO')

    <h1>Modifier Testimonial</h1>
    <br>
    @can('create', \App\Models\Testimonial::class)
        <form action="{{route('testimonials.update', $testimonials->id)}}" method="POST">
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
            Description: <input type="text" name="description" value="{{$testimonials->description}}">
            Photo: <input type="file" name="photo" value="{{$testimonials->photo}}">
            Nom: <input type="text" name="nom" value="{{$testimonials->nom}}">
            Statut: <input type="text" name="statut" value="{{$testimonials->statut}}">
        </form>
    @endcan

@endsection

