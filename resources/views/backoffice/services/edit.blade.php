@extends('template.back')

@section('contentBO')

    <h1 class="text-center">Modifier Service</h1>
    <br>
  
        <form class="container" action="{{route('services.update', $service->id)}}" method="POST">
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
            logo: <input type="text" name="logo" value="{{$service->logo}}">
            titre: <input type="text" name="titre" value="{{$service->titre}}">
            description: <input type="text" name="description" value="{{$service->description}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

