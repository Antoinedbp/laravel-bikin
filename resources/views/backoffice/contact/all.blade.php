@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE CONTACT</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataContact as $item)

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Adresse</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">1er logo</th>
                <th scope="col">2ème logo</th>
                <th scope="col">3ème logo</th>
                <th scope="col">Edit</th>
                <th scope="col">Show</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img src="{{$item->adresse}}" alt=""></td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->logo1}}</td>
                <td>{{$item->logo2}}</td>
                <td>{{$item->logo3}}</td>
                <td>
                  <a href="{{route('contacts.edit', $item->id)}}">
                    <button class="btnEd" type="submit">
                      EDIT
                    </button>
                  </a>
                </td>
                <td>
                  <a href="{{route('contacts.show', $item->id)}}">
                    <button class="btnShow" type="submit">
                        SHOW
                    </button>
                  </a>
                </td>
                <td>
                  <form action="{{route('contacts.destroy', $item->id)}}" method="post">
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