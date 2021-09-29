@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$teams->id}}</h4>
            <h3 class="card-title">{{$teams->titre}}</h3>
            <h3 class="card-title">{{$teams->description}}</h3>
            <form action="{{route('teams.destroy', $teams->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('teams.edit', $teams->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection