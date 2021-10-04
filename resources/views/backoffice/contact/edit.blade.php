@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier Contact</h1>
    <br>
       
        <form class="container" action="{{route('contacts.update', $contact->id)}}" method="POST">
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
            adresse: <input type="text" name="adresse" value="{{$contact->adresse}}">
            phone: <input type="text" name="phone" value="{{$contact->phone}}">
            email: <input type="text" name="email" value="{{$contact->email}}">
            logo1: <input type="text" name="logo1" value="{{$contact->logo1}}">
            logo2: <input type="text" name="logo2" value="{{$contact->logo2}}">
            logo3: <input type="text" name="logo3" value="{{$contact->logo3}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
   

@endsection

