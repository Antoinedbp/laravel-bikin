@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$heros->id}}</h4>
            <h3 class="card-title">{{$heros->titre}}</h3>
            <h3 class="card-title">{{$heros->description}}</h3>
            <form action="{{route('heros.destroy', $heros->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('heros.edit', $heros->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection