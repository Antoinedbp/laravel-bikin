@extends('template.back')

@section('contentBO')

    <h1>Modifier Service</h1>
    <br>
    @can('create', \App\Models\Service::class)
        <form action="{{route('services.update', $services->id)}}" method="POST">
            @csrf
            @method('PUT')
            Location: <input type="text" name="location" value="{{$services->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$services->locaDescription}}">
            Email: <input type="text" name="email" value="{{$services->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$services->emailDescription}}">
            call: <input type="text" name="call" value="{{$services->call}}">
            Description call: <input type="text" name="callDescription" value="{{$services->callDescription}}">
            Source: <input type="text" name="src" value="{{$services->src}}">
        </form>
    @endcan

@endsection

