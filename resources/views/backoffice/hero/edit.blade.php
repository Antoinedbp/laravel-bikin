@extends('template.back')

@section('contentBO')

    <h1>Modifier Hero</h1>
    <br>
    @can('create', \App\Models\PremiereSection::class)
        <form action="{{route('heros.update', $heros->id)}}" method="POST">
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
            Location: <input type="text" name="location" value="{{$heros->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$heros->locaDescription}}">
            Email: <input type="text" name="email" value="{{$heros->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$heros->emailDescription}}">
            call: <input type="text" name="call" value="{{$heros->call}}">
            Description call: <input type="text" name="callDescription" value="{{$heros->callDescription}}">
            Source: <input type="text" name="src" value="{{$heros->src}}">
        </form>
    @endcan

@endsection

