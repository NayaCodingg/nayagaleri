@extends('layout.app')

@section('content')
<div class="">
  {{-- {{$foto}} --}}
  <div class=" text-center">
    <div class="row row-cols-4">
      @foreach ($foto as $f )
       
     
    <div class="card rounded shadow-sm border-0">
      <div class="card-body "><img src="{{asset('storage/'.$f->LokasiFile)}}" class="img-fluid d-block mx-auto mb-3">
        
        {{-- <ul class="list-inline small">
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
          <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
        </ul> --}}
      </div>
      <div class="container">
        <p>
{{-- @dd() --}}
            <button data-toggle="collapse" data-target="#collapseExample{{$f->id}}" aria-expanded="false" aria-controls="collapseExample" type="button" class="btn btn-sm btn-light position-relative">
                See All Coments
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{$f->fotoComments->count()}}
                  <span class="visually-hidden">comments</span>
                </span>
              </button>
          </p>
          <div class="collapse" id="collapseExample{{$f->id}}">
            <div class="card card-body p-0">
               <!-- Comment Form -->
    <form class="card-footer" method="POST" action="/cmnt">
        @csrf
        <div class="input-group">
          <input type="hidden" name="fotoid" value="{{$f->id}}">
          <input type="hidden" name="userid" value="{{Auth()->user()->id}}">
            <input name="cmnt" class="form-control p-0" rows="3" placeholder="Add a comment">
            <button type="submit" class="btn btn-dark btn-sm">Comment</button>
        </div>


      </form>
    <!-- Comment List -->
    
    <div class="list-group list-group-flush">
        
        @foreach ( $f->fotoComments as $comment)
            <div class="list-group-item">
                <h6 class="list-group-item-heading"><strong>{{$comment->commentUser->Username}}</strong> <span class="text-muted ms-2">{{ $comment->created_at->diffForHumans() }}</span></h6>
                <p class="list-group-item-text">{{ $comment->cmnt }}</p>
            </div>
        @endforeach
    </div>
            </div>
            <br>
          </div>
    </div>
    </div>
    @endforeach
    </div>
  </div>
  
</div>
@endsection