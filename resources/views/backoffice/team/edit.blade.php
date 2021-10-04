@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier TEAM</h1>
    <br>
  
        <form class="container" action="{{route('teams.update', $team->id)}}" method="POST">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @csrf
            @method('PUT')
            photo: <input type="text" name="photo" value="{{$team->photo}}">
            nom: <input type="text" name="nom" value="{{$team->nom}}">
            statut: <input type="text" name="statut" value="{{$team->statut}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

