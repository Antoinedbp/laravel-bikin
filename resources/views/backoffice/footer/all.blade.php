@extends('template.back')

@section('contentBO')

<div class="container">
  <h1 class="titresBO">Footer</h1>

  <div class="buttonsBO">
    <a href="{{route('hombo')}}" class="aBtn">
        <button class="monBtn2" type="submit">Retour backoffice</button>
    </a>
  </div>
  <div class=" ml-5">
      

        <table class="table">
          <thead>
            <tr>
              <th scope="col">adresse</th>
              <th scope="col">phone</th>
              <th scope="col">email</th>
              <th scope="col">linkTitre1</th>
              <th scope="col">linkTitre2</th>
              <th scope="col">link1</th>
              <th scope="col">phone</th>
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
              
            </tr>
          </thead>
          <tbody>
           
            <tr>
              <th scope="row">{{$dataHero[0]->chemin}}</th>
              <td>
               
                <a href="{{route('heros.edit', $dataHero[0]->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
               
              </td>
              <td>
                <a href="{{route('heros.show', $dataHero[0]->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              <td>
                <form action="{{route('heros.destroy', $dataHero[0]->id)}}" method="post">
                  @csrf
                      @method('DELETE')
                      <button class="btnDel" type="submit">DELETE</button>
                </form>
              </td>
            </tr> 
          
           
          </tbody>
        </table>
    
  </div>
</div>

    <h1 class="titresBO">PARTIE FOOTER</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataFooter as $item)

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Nom</th>
              <th scope="col">Statut</th>
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->description}}</td>
              <td><img src="{{$item->photo}}" alt=""></td>
              <td>{{$item->nom}}</td>
              <td>{{$item->statut}}</td>
              <td>
                <a href="{{route('testimonials.edit', $item->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
              </td>
              <td>
                <a href="{{route('testimonials.show', $item->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              <td>
                <form action="{{route('testimonials.destroy', $item->id)}}" method="post">
                  @csrf
                      @method('DELETE')
                      <button class="btnDel" type="submit">DELETE</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>

        @endforeach
    </div>

@endsection