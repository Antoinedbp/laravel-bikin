@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE ABOUT</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataAbout as $item)

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Chemin</th>
              <th scope="col">Logo</th>
              <th scope="col">Titre</th>
              <th scope="col">Description</th>
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->chemin}}</td>
              <td><i class={{ $item->logo }}></i></td>
              <td>{{$item->titre}}</td>
              <td>{{$item->description}}</td>
              <td>
                <a href="{{route('abouts.edit', $item->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
              </td>
              <td>
                <a href="{{route('abouts.show', $item->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              <td>
                <form action="{{route('abouts.destroy', $item->id)}}" method="post">
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