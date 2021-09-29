@extends('template.back')

@section('contentBO')
    <form action="{{route('testimonials.store')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Photo</label>
        <input type="file" name="photo" id="">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nom</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="nom">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Statut</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name="statut">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
@endsection