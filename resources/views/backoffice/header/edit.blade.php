@extends('template.back')

@section('contentBO')

    <h1>Modifier Header</h1>
    <br>
       
        <form action="{{route('headers.update', $navbar->id)}}" method="POST">
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
            chemin: <input type="text" name="chemin" value="{{$navbar->chemin}}">
        </form>
    

@endsection

