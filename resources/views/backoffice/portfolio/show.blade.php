@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$portfolios->id}}</h4>
            <h3 class="card-title">{{$portfolios->titre}}</h3>
            <h3 class="card-title">{{$portfolios->description}}</h3>
            <form action="{{route('portfolios.destroy', $portfolios->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('portfolios.edit', $portfolios->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection