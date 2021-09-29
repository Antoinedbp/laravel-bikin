@extends('template.back')

@section('contentBO')

    <h1>Modifier Footer</h1>
    <br>
    @can('create', \App\Models\Footer::class)
        <form action="{{route('footers.update', $footers->id)}}" method="POST">
            @csrf
            @method('PUT')
            Location: <input type="text" name="location" value="{{$footers->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$footers->locaDescription}}">
            Email: <input type="text" name="email" value="{{$footers->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$footers->emailDescription}}">
            call: <input type="text" name="call" value="{{$footers->call}}">
            Description call: <input type="text" name="callDescription" value="{{$footers->callDescription}}">
            Source: <input type="text" name="src" value="{{$footers->src}}">
        </form>
    @endcan

@endsection

