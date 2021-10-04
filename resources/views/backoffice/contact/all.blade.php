@extends('template.back')

@section('contentBO')

    <h1 class="titresBO">PARTIE CONTACT</h1>

   
      <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    
    <div class="globaleProduct container">
        
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
                <td>{{$item->adresse}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->logo1}}</td>
                <td>{{$item->logo2}}</td>
                <td>{{$item->logo3}}</td>
                @can('edit')
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
                @endcan
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