@extends('template.back')

@section('contentBO')
<h1 class="titresBO">PARTIE Team</h1>

<a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
  <button class="monBtn2" type="submit">Retour backoffice</button>
</a>
<div class="globaleProduct">
    
   

    <table class="table container">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Logo</th>
          <th scope="col">Titre</th>
          <th scope="col">Description</th>
          <th scope="col">Edit</th>
          <th scope="col">Show</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dataService as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->logo}}</td>
          <td>{{$item->titre}}</td>
          <td>{{$item->description}}</td>
          <td>
            <a href="{{route('services.edit', $item->id)}}">
              <button class="btnEd" type="submit">
                EDIT
              </button>
            </a>
          </td>
          <td>
            <a href="{{route('services.show', $item->id)}}">
              <button class="btnShow" type="submit">
                  SHOW
              </button>
            </a>
          </td>
          <td>
            <form action="{{route('services.destroy', $item->id)}}" method="post">
              @csrf
                  @method('DELETE')
                  <button class="btnDel" type="submit">DELETE</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    
</div>
    <h1 class="titresBO">PARTIE TEAM</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataTeam as $item)

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
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
                <td><img src="{{$item->photo}}" alt=""></td>
                <td>{{$item->nom}}</td>
                <td>{{$item->statut}}</td>
                <td>
                  <a href="{{route('teams.edit', $item->id)}}">
                    <button class="btnEd" type="submit">
                      EDIT
                    </button>
                  </a>
                </td>
                <td>
                  <a href="{{route('teams.show', $item->id)}}">
                    <button class="btnShow" type="submit">
                        SHOW
                    </button>
                  </a>
                </td>
                <td>
                  <form action="{{route('teams.destroy', $item->id)}}" method="post">
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