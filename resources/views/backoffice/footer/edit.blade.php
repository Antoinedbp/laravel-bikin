@extends('template.back')

@section('contentBO')


   
    
    <h1 class="text-center">Modifier Footer</h1>
 
    
        <form class="container" action="{{route('footers.update', $footer->id)}}" method="POST">
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
            adresse: <input type="text" name="adresse" value="{{$footer->adresse}}">
            phone: <input type="text" name="phone" value="{{$footer->phone}}">
            email: <input type="text" name="email" value="{{$footer->email}}">
            linkTitre1: <input type="text" name="linkTitre1" value="{{$footer->linkTitre1}}">
            linkTitre2: <input type="text" name="linkTitre2" value="{{$footer->linkTitre2}}">
            linkTitre2: <input type="text" name="linkTitre2" value="{{$footer->linkTitre2}}">
            link1: <input type="text" name="link1" value="{{$footer->link1}}">
            link2: <input type="text" name="link2" value="{{$footer->link2}}">
            link3: <input type="text" name="link3" value="{{$footer->link3}}">
            link4: <input type="text" name="link4" value="{{$footer->link4}}">
            link5: <input type="text" name="link5" value="{{$footer->link5}}">
            link6: <input type="text" name="link6" value="{{$footer->link6}}">
            link7: <input type="text" name="link7" value="{{$footer->link7}}">
            link8: <input type="text" name="link8" value="{{$footer->link8}}">
            link9: <input type="text" name="link9" value="{{$footer->link9}}">
            link10: <input type="text" name="link10" value="{{$footer->link10}}">
            description: <input type="text" name="description" value="{{$footer->description}}">
            titre: <input type="text" name="titre" value="{{$footer->titre}}">
           
        </form>


@endsection

