@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE TESTIMONIALS</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct container">
        
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Statut</th>
            @can('edit')
            <th scope="col">Edit</th>
           
            <th scope="col">Show</th>
            @endcan
            <th scope="col">Delete</th>
            
          </tr>
        </thead>
        <tbody>
              @foreach ($dataTest as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->description}}</td>
                <td><img height="30px" width="30px" src="{{asset('assets/img/testimonials/'.$item->photo) }}" alt=""></td>
                <td>{{$item->nom}}</td>
                <td>{{$item->statut}}</td>
                @can('edit')
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
                @endcan
                <td>
                  <form action="{{route('testimonials.destroy', $item->id)}}" method="post">
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

@endsection