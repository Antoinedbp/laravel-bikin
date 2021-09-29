@extends('template.back')

@section('contentBO')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$contacts->id}}</h4>
            <h3 class="card-title">{{$contacts->titre}}</h3>
            <h3 class="card-title">{{$contacts->description}}</h3>
            <form action="{{route('contacts.destroy', $contacts->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('contacts.edit', $contacts->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection