@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$titres->id}}</h4>
            <h3 class="card-title">{{$titres->titre}}</h3>
            <h3 class="card-title">{{$titres->description}}</h3>
            <form action="{{route('titres.destroy', $titres->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('titres.edit', $titres->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection