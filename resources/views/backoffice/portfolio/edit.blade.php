@extends('template.back')

@section('contentBO')

    <h1 class="text-center">Modifier Portfolio</h1>
    <br>
    @can('create', \App\Models\Portfolio::class)
        <form class="container" action="{{route('portfolios.update', $portfolio->id)}}" method="POST">
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
            image: <input type="text" name="image" value="{{$portfolio->image}}">
            photo_id: <input type="text" name="photo_id" value="{{$portfolio->photo_id}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    @endcan

@endsection

