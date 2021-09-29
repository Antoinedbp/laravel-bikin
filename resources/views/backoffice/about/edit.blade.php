@extends('template.back')

@section('contentBO')

    <h1>Modifier About</h1>
    <br>
    @can('create', \App\Models\DeuxiemeSection::class)
        <form action="{{route('abouts.update', $abouts->id)}}" method="POST">
            @csrf
            @method('PUT')
            Location: <input type="text" name="location" value="{{$abouts->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$abouts->locaDescription}}">
            Email: <input type="text" name="email" value="{{$abouts->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$abouts->emailDescription}}">
            call: <input type="text" name="call" value="{{$abouts->call}}">
            Description call: <input type="text" name="callDescription" value="{{$abouts->callDescription}}">
            Source: <input type="text" name="src" value="{{$abouts->src}}">
        </form>
    @endcan

@endsection

