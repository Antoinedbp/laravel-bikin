@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$abouts->id}}</h4>
            <h3 class="card-title">{{$abouts->titre}}</h3>
            <h3 class="card-title">{{$abouts->description}}</h3>
            <form action="{{route('abouts.destroy', $abouts->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('abouts.edit', $abouts->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection