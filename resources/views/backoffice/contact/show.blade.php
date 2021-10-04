@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            Contacts
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$contact->phone}}</h5>
                <p class="card-text">{{$contact->adresse}}</p>
                <p class="card-text">{{$contact->email}}</p>
                <p class="card-text">{{$contact->logo1}}</p>
                <p class="card-text">{{$contact->logo2}}</p>
                <p class="card-text">{{$contact->logo3}}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-info">EDIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection