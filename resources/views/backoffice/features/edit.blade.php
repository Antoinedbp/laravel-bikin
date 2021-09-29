@extends('template.back')

@section('contentBO')

    <h1>Modifier Features</h1>
    <br>
    @can('create', \App\Models\Features::class)
        <form action="{{route('features.update', $features->id)}}" method="POST">
            @csrf
            @method('PUT')
            Location: <input type="text" name="location" value="{{$features->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$features->locaDescription}}">
            Email: <input type="text" name="email" value="{{$features->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$features->emailDescription}}">
            call: <input type="text" name="call" value="{{$features->call}}">
            Description call: <input type="text" name="callDescription" value="{{$features->callDescription}}">
            Source: <input type="text" name="src" value="{{$features->src}}">
        </form>
    @endcan

@endsection

