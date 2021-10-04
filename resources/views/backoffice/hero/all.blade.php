@extends('template.back')

@section('contentBO')
<div class="container">
  <h1 class="titresBO">PARTIE HERO</h1>

  <div class="buttonsBO">
    <a href="{{route('hombo')}}" class="aBtn">
        <button class="monBtn2" type="submit">Retour backoffice</button>
    </a>
  </div>
  <div class=" ml-5">
      

        <table class="table">
          <thead>
            <tr>
              <th scope="col">chemin</th>
              @can('edit')
              <th scope="col">Edit</th>
             
              <th scope="col">Show</th>
              @endcan
              <th scope="col">Delete</th>
              
            </tr>
          </thead>
          <tbody>
           
            <tr>
              <th scope="row">{{$dataHero[0]->chemin}}</th>
              @can('edit')
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
                @endcan
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


@endsection