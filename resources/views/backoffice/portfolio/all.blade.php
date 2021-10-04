@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE PORTFOLIO</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct ml-4 container">
        
      <table class="table">
        
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo_ID</th>
            <th scope="col">Image</th>
            @can('edit')
            <th scope="col">Edit</th>
           
            <th scope="col">Show</th>
            @endcan
            <th scope="col">Delete</th>
          </tr>
        </thead>

        <tbody>

            @foreach ($dataPort as $item)

            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->photo_id}}</td>
              <td><img src="{{asset('assets/img/portfolio/'.$item->image)}}" style="height:3rem" class="img-fluid" alt="Responsive image"></td>
              @can('edit')
              <td>
               
                <a href="{{route('portfolios.edit', $item->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
                
              </td>
             
              <td>

                <a href="{{route('portfolios.show', $item->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>

              </td>

              @endcan

              <td>

                <form action="{{route('portfolios.destroy', $item->id)}}" method="post">
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