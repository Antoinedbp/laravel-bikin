@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE FEATURES</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataFeat as $item)

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Sous-Titre</th>
              <th scope="col">Description1</th>
              <th scope="col">Description2</th>
              <th scope="col">Description3</th>
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td><img src="{{$item->image}}" alt=""></td>
              <td>{{$item->titre}}</td>
              <td>{{$item->sous_titre}}</td>
              <td>{{$item->description1}}</td>
              <td>{{$item->description2}}</td>
              <td>{{$item->description3}}</td>
              <td>
                <a href="{{route('features.edit', $item->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
              </td>
              <td>
                <a href="{{route('features.show', $item->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              <td>
                <form action="{{route('features.destroy', $item->id)}}" method="post">
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