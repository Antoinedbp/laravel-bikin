@extends('template.back')

@section('contentBO')

    <h1 class="titresBO">PARTIE FEATURES</h1>

   
    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    
    <div class="globaleProduct container">
        
       

        <table class="table ">
          <thead>
           
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Sous_titre</th>
              <th scope="col">Description1</th>
              <th scope="col">Description2</th>
              <th scope="col">Description3</th>
              @can('edit')
              <th scope="col">Edit</th>
              
              <th scope="col">Show</th>
              @endcan
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataFeat as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td><img height="30px" width="30px" src="{{$item->image}}" alt=""></td>
              <td>{{$item->titre}}</td>
              <td>{{$item->sous_titre}}</td>
              <td>{{$item->description1}}</td>
              <td>{{$item->description2}}</td>
              <td>{{$item->description3}}</td>
              
              @can('edit')
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
              @endcan
              <td>
                <form action="{{route('features.destroy', $item->id)}}" method="post">
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