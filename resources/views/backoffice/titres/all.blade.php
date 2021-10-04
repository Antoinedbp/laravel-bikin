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

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Description</th>
                  @can('edit')
                  <th scope="col">Edit</th>
                 
                  <th scope="col">Show</th>
                  @endcan
                  <th scope="col">Delete</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->titre}}</td>
                  <td>{{$item->description}}</td>
                  @can('edit')
                  <td>
                     
                    <a href="{{route('titres.edit', $item->id)}}">
                      <button class="btnEd" type="submit">
                        EDIT
                      </button>
                    </a>
                    
                  </td>
                  
                  <td>
                    <a href="{{route('titres.show', $item->id)}}">
                      <button class="btnShow" type="submit">
                          SHOW
                      </button>
                    </a>
                  </td>
                  @endcan
                  <td>
                    @can('titre-delete', $item)
                      <form action="{{route('titres.destroy', $item->id)}}" method="post">
                        @csrf
                            @method('DELETE')
                            <button class="btnDel" type="submit">DELETE</button>
                      </form>
                    @endcan
                  </td>
                 
                </tr>
              </tbody>
            </table>
            
          @endforeach
      </div>
    </div>

@endsection