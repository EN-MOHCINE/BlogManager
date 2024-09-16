@extends('app')
@section('content')
<div>

        {{-- <div class="row m-4">
            <div class="mx-auto   ">
                <div class="card shadow  "style="width: 18rem;">
                    <img src="{{asset('image/'.$Post->picture) }}" class=" img-fluid card-img-top ">
                    <div class="card-body  p-5">
                    <h3 class="fw-bold text-primary">{{ $Post->title }}</h3>
                    <p>{{ $Post->content }}</p>
                    </div>
                </div>
            </div>

        </div> --}}
        <div class=" row  text-white fs-auto border container">
            <div class="  border border-dark col-md-6 "><img width="400px" height="auto"  src="{{asset('storage/'.$Post->picture) }}"/></div>
            <div class="col-md-6 text-info h3  fontt ">
                <p class="d-flex align-items-center">  <span class="text-dark h3 fontt  ">id </span>:{{$Post->id}} </p> 
                <br>
                <p class="d-flex align-items-center">  <span class="text-dark h3  ">title : </span>:{{$Post->title}}</p>
                <br>
                <p class="d-flex align-items-center">  <span class="text-dark h3  ">Content </span>:{{$Post->content}} </p>
                {{-- <br>
                <span class="text-dark h3 ">puv</span> :{{$Post->puv}}
                <br>
                <span class="text-dark h3 ">unite</span> :{{$Post->unite}}
                <br>
                <span class="text-dark h3 ">quantite</span> :{{$Post->quantite}} --}}
                
            </div>
            
        </div>
    
    </div>

</div>
@endsection
@section('title','show-Blog')