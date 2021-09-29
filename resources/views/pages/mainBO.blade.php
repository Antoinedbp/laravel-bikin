@extends('template.back')

@section('contentBO')

  <h1 class="title_home">BACKOFFICE HOME</h1>
  <div class="globaleHome" >
    <div class="row globale2">

      <div class="col-6 skills">
        <h3 class="text-center">Modification TITRES</h3>
        <a href="{{route('titres.index')}}">
          <button class="btn btn-danger"type="submit">DIRECTION TITRES</button>
        </a>
      </div>
      <div class="col-6 skills">
        <h3 class="text-center">Modification HEADER</h3>
        <a href="{{route('headers.index')}}">
          <button class="btn btn-danger"type="submit">DIRECTION HEADER</button>
        </a>
      </div>
      <div class="col-6 about">
        <h3 class="text-center">Modification ABOUT</h3>
        <a href="{{route('abouts.index')}}">
        <button class="btn btn-danger"type="submit">DIRECTION ABOUT</button>
        </a>
      </div>
      <div class="col-6 contact">
        <h3 class="text-center">Modification STEAK</h3>
        <a href="{{route('steaks.index')}}">
          <button class="btn btn-danger"type="submit">DIRECTION STEAK</button>
        </a>
      </div>
      <div class="col-6 portfolio">
          <h3 class="text-center">Modification CHEFS</h3>
          <a href="{{route('chefs.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION CHEFS</button>
          </a>
      </div>
      <div class="col-6 skills">
          <h3 class="text-center">Modification CUSTOMERS</h3>
          <a href="{{route('customers.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION CUSTOMERS</button>
          </a>
      </div>
    </div>
  </div>

@endsection

