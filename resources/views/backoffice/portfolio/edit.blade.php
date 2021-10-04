@extends('template.back')

@section('contentBO')

    <h1>Modifier Portfolio</h1>
    <br>
    @can('create', \App\Models\Portfolio::class)
        <form action="{{route('portfolios.update', $portfolios->id)}}" method="POST">
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
            Location: <input type="text" name="location" value="{{$portfolios->location}}">
            Description de location: <input type="number" name="locaDescription" value="{{$portfolios->locaDescription}}">
            Email: <input type="text" name="email" value="{{$portfolios->email}}">
            Description email: <input type="text" name="emailDescription" value="{{$portfolios->emailDescription}}">
            call: <input type="text" name="call" value="{{$portfolios->call}}">
            Description call: <input type="text" name="callDescription" value="{{$portfolios->callDescription}}">
            Source: <input type="text" name="src" value="{{$portfolios->src}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    @endcan

@endsection

