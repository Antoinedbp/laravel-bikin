@extends('template.back')

@section('contentBO')
    <div class="container">
      <h1 class="titresBO">PARTIE TITRES</h1>

      <div class="buttonsBO">
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
      </div>
      <div class=" ml-5">
          
          @foreach ($dataTitre as $item)

          {{-- <div class="row">
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
              <a href="{{route('titres.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                    EDIT
                </button>
              </a>
            </div> --}}

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->titre}}</td>
                  <td>{{$item->description}}</td>
                </tr>
              </tbody>
            </table>

            <div class="buttonDelEd">
              <form action="{{route('titres.destroy', $item->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button class="btnDel" type="submit">DELETE</button>
              </form>
              <a href="{{route('titres.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                    EDIT
                </button>
              </a>
            </div>
          @endforeach
      </div>
    </div>

@endsection