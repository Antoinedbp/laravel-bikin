@extends('template.back')

@section('contentBO')

    <h1>Modifier Team</h1>
    <br>
    @can('create', \App\Models\Team::class)
        <form action="{{route('teams.update', $teams->id)}}" method="POST">
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
            Location: <input type="text" name="location" value="{{$teams->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$teams->locaDescription}}">
            Email: <input type="text" name="email" value="{{$teams->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$teams->emailDescription}}">
            call: <input type="text" name="call" value="{{$teams->call}}">
            Description call: <input type="text" name="callDescription" value="{{$teams->callDescription}}">
            Source: <input type="text" name="src" value="{{$teams->src}}">
        </form>
    @endcan

@endsection

