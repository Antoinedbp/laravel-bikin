@extends('template.back')

@section('contentBO')

    <h1>Modifier Header</h1>
    <br>
    @can('create', \App\Models\Header::class)
        <form action="{{route('headers.update', $headers->id)}}" method="POST">
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
            Location: <input type="text" name="location" value="{{$headers->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$headers->locaDescription}}">
            Email: <input type="text" name="email" value="{{$headers->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$headers->emailDescription}}">
            call: <input type="text" name="call" value="{{$headers->call}}">
            Description call: <input type="text" name="callDescription" value="{{$headers->callDescription}}">
            Source: <input type="text" name="src" value="{{$headers->src}}">
        </form>
    @endcan

@endsection

