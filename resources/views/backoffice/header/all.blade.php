@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE HEADER</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataHeader as $item)

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <p class="font-italic">
                Titre: {{$item->titre}}
              </p>
              <p>
                Description: {{$item->description}}
              </p> 
            </div>
          </div>

          <div class="buttonDelEd">
            <a href="{{route('headers.edit', $item->id)}}">
              <button class="btnEd" type="submit">
                  EDIT
              </button>
            </a>
          </div>

        @endforeach
    </div>

@endsection