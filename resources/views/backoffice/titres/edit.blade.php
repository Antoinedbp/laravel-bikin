@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier Titre</h1>
        <br>
        <form action="{{route('titres.update', $titre->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="p1">Titre:</p>
            <input type="text" name="titre" class="main" value="{{$titre->titre}}"></input>
            <p class="p1">Description:</p>
            <input type="text" name="description" class="main" value="{{$titre->description}}"></input>
            <button type="submit" class="btn btn-success btnS">Submit</button>
        </form>
    </div>

@endsection

