@extends('layout.app')

@section('content')
  <div class=" text-center">
    <div class="row row-cols-4">
      @foreach ($foto as $f )
        
     
    <a href="/album/{{$f->id}}" class="card rounded shadow-sm border-0">
      <h5> <span href="#" class="text-dark">{{$f->albumname}}</span></h5>
        <p class="small text-muted font-italic">{{$f->desc}}.</p>
{{--         
        <ul class="list-inline small">
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li> --}}
        {{-- </ul> --}}
      </a>
    </div>
    @endforeach
    </div>

@endsection