@extends('template.back')

@section('contentBO')

<div class="container">
  <h1 class="titresBO">Footer</h1>

  
    <a href="{{route('hombo')}}" class="aBtn ml-4">
        <button class="monBtn2" type="submit">Retour backoffice</button>
    </a>
 
  <div class=" ml-5">
      

        <table class="table">
          <thead>
            <tr>
              <th scope="col">adresse</th>
              <th scope="col">phone</th>
              <th scope="col">email</th>
              <th scope="col">linkTitre1</th>
              <th scope="col">linkTitre2</th>
              <th scope="col">link1</th>
              <th scope="col">link2</th>
              <th scope="col">link3</th>
              <th scope="col">link4</th>
              <th scope="col">link5</th>
              <th scope="col">link6</th>
              <th scope="col">link7</th>
              <th scope="col">link8</th>
              <th scope="col">link9</th>
              <th scope="col">link10</th>
              <th scope="col">Description</th>
              <th scope="col">Titre</th>
              @can('edit')
              <th scope="col">Edit</th>
             
              <th scope="col">Show</th>
              @endcan
              <th scope="col">Delete</th>
              
            </tr>
          </thead>
          <tbody>
           
            <tr>
              <th scope="row">{{$dataFooter->adresse}}</th>
              <th scope="row">{{$dataFooter->phone}}</th>
              <th scope="row">{{$dataFooter->email}}</th>
              <th scope="row">{{$dataFooter->linkTitre1}}</th>
              <th scope="row">{{$dataFooter->linkTitre2}}</th>
              <th scope="row">{{$dataFooter->link1}}</th>
              <th scope="row">{{$dataFooter->link2}}</th>
              <th scope="row">{{$dataFooter->link3}}</th>
              <th scope="row">{{$dataFooter->link4}}</th>
              <th scope="row">{{$dataFooter->link5}}</th>
              <th scope="row">{{$dataFooter->link6}}</th>
              <th scope="row">{{$dataFooter->link7}}</th>
              <th scope="row">{{$dataFooter->link8}}</th>
              <th scope="row">{{$dataFooter->link9}}</th>
              <th scope="row">{{$dataFooter->link10}}</th>
              <th scope="row">{{$dataFooter->description}}</th>
              <th scope="row">{{$dataFooter->titre}}</th>
              
              @can('edit')
              <td>
               
                <a href="{{route('footers.edit', $dataFooter->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
               
               
              </td>
              
              <td>
                <a href="{{route('footers.show', $dataFooter->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              @endcan
              <td>
                <form action="{{route('footers.destroy', $dataFooter->id)}}" method="post">
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