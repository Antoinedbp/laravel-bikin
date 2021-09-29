@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE TESTIMONIALS</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataTest as $item)

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <p>
                Description: {{$item->description}}
              </p>
              <img class="img-fluid" src="{{$item->photo}}" alt="..." />
              <p class="font-italic">
                Nom: {{$item->nom}}
              </p>
              <p class="font-italic">
                Statut: {{$item->statut}}
              </p>
            </div>
          </div>

          <div class="buttonDelEd">
            <a href="{{route('testimonials.edit', $item->id)}}">
              <button class="btnEd" type="submit">
                  EDIT
              </button>
            </a>
          </div>

        @endforeach
    </div>

@endsection