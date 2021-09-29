@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$features->id}}</h4>
            <h3 class="card-title">{{$features->titre}}</h3>
            <h3 class="card-title">{{$features->description}}</h3>
            <form action="{{route('features.destroy', $features->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('features.edit', $features->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection