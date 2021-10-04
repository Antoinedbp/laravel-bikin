@extends('template.back')

@section('contentBO')
<div class="ab">
    <h1>Modifier Hero</h1>
    <br>
    <form action="{{route('heros.update', $hero->id)}}" method="POST">
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
        <p class="p1">chemin:</p>
        <input type="text" name="chemin" class="main" value="{{$hero->chemin}}"/>
        <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
    </form>
</div>
@endsection

