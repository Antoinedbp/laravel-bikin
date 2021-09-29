@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$services->id}}</h4>
            <h3 class="card-title">{{$services->titre}}</h3>
            <h3 class="card-title">{{$services->description}}</h3>
            <form action="{{route('services.destroy', $services->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('services.edit', $services->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection