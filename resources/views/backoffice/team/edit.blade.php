@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier Team</h1>
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
            logo: <input type="text" name="logo" value="{{$team->photo}}">
            titre: <input type="text" name="titre" value="{{$team->nom}}">
            description: <input type="text" name="description" value="{{$team->statut}}">
        </form>
    

@endsection

