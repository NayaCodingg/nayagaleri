@extends('layout.app')

@section('content')
<div class="">
  <div class="container text-center">
 <h1>   {{$foto->albumname}}
</h1>
  </div>
  <div class=" text-center">
    <div class="row row-cols-4">
      @foreach ($foto->albumFoto as $f )
        
     
    <div class="card rounded shadow-sm border-0">
      <div class="card-body "><img src="{{asset('storage/'.$f->LokasiFile)}}" class="img-fluid d-block mx-auto mb-3">
        
        <ul class="list-inline small">
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
        </ul>
      </div>
    </div>
    @endforeach
    </div>
  </div>
  
</div>
@endsection