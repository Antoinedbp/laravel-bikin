@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$footers->id}}</h4>
            <h3 class="card-title">{{$footers->titre}}</h3>
            <h3 class="card-title">{{$footers->description}}</h3>
            <form action="{{route('footers.destroy', $footers->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('footers.edit', $footers->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection