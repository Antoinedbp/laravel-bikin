@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier Contact</h1>
    <br>
       
        <form class="container" action="{{route('abouts.update', $about->id)}}" method="POST">
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
            chemin: <input type="text" name="chemin" value="{{$about->chemin}}">
            logo: <input type="text" name="logo" value="{{$about->logo}}">
            titre: <input type="text" name="titre" value="{{$about->titre}}">
            description: <input type="text" name="description" value="{{$about->description}}">
        </form>
  

@endsection

