@extends('template.back')

@section('contentBO')

    <h1 class="w-100 text-center">Modifier Features</h1>
    <br>

        <form class="container" action="{{route('features.update', $feature->id)}}" method="POST" enctype="multipart/form-data">
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
            image: <input type="file" name="image" value="{{$feature->image}}">
            titre: <input type="text" name="titre" value="{{$feature->titre}}">
            sous_titre: <input type="text" name="sous_titre" value="{{$feature->sous_titre}}">
            description1: <input type="text" name="description1" value="{{$feature->description1}}">
            description2: <input type="text" name="description2" value="{{$feature->description2}}">
            description3: <input type="text" name="description3" value="{{$feature->description3}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>


@endsection

