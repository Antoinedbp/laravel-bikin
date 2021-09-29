@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$headers->id}}</h4>
            <h3 class="card-title">{{$headers->titre}}</h3>
            <h3 class="card-title">{{$headers->description}}</h3>
            <form action="{{route('headers.destroy', $headers->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('headers.edit', $headers->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection