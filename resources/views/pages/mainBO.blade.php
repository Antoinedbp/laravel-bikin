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
      <div class="col-6 abouti">
        <h3 class="text-center">Modification ABOUT</h3>
        <a href="{{route('abouts.index')}}">
        <button class="btn btn-danger"type="submit">DIRECTION ABOUT</button>
        </a>
      </div>
      <div class="col-6 contacte">
        <h3 class="text-center">Modification FEATURES</h3>
        <a href="{{route('features.index')}}">
          <button class="btn btn-danger"type="submit">DIRECTION FEATURES</button>
        </a>
      </div>
      <div class="col-6 portfolio">
          <h3 class="text-center">Modification SERVICES</h3>
          <a href="{{route('services.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION SERVICES</button>
          </a>
      </div>
      <div class="col-6 skills">
          <h3 class="text-center">Modification PORTFOLIOS</h3>
          <a href="{{route('portfolios.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION PORTFOLIOS</button>
          </a>
      </div>
    </div>
  </div>

@endsection

