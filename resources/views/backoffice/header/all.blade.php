@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE HEADER</h1>

   
   
    <div class="container">
      <div class="row justify-content-center">
        
          <a href="{{route('hombo')}}" class="aBtn text-center">
              <button class="monBtn2 " type="submit">Retour backoffice</button>
          </a>
        
        @foreach ($dataNav as $item)
        <div class="card" style="width: 18rem; margin: 0.25rem">
          
          <div class="card-body">
           
            <p class="card-text text-center">{{ $item->chemin }}</p>
            <div class="buttonDelEd justify-content-around">
              
              @can('edit')
              <a href="{{route('headers.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                    EDIT
                </button>
              </a>
              @endcan
              <form action="{{route('headers.destroy', $item->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button class="btnDel" type="submit">DELETE</button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
   
   
@endsection