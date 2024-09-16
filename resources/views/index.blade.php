@extends('app');


@section('content')



    @if ($message = Session::get('success'))
        
        <div style="text-align: center" class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

        
    @endif
    <a href="{{route('post.create')}}" class="btn btn-dark mx-5">create</a>

    <div class=" row d-flex justify-content-evenly mx-auto "> 
    @foreach($Posts as $Posts)
        <div class="card col-sm-6 col-lg-4 col-6 shadow m-3" style="width: 22rem;">
                <img class="card-img-top img-fluid " src="{{asset('storage/'.$Posts['picture']) }}" alt="Card image cap">
                <div class="card-body">
                        <p class=" card-title rounded-pill badge bg-secondary">{{$Posts['id']}}-    {{$Posts['title']}}   </p>
                        <p class="card-text">{{$Posts->content}}</p>
                        <a href="{{route('post.show',$Posts ->id)}}" class="btn btn-warning">show</a>
                        <a href="{{route('post.edit',$Posts->id)}}" class="btn btn-success">update</a>


                        <form action="{{route('post.destroy',$Posts->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="delete">
                        </form>
                


                        {{-- <a href="{{route('post.edit',$Posts->id)}}" class="btn btn-outline-danger">delete</a> --}}
                        
                </div>
        </div>
    @endforeach
    </div>
@endsection
@section('title','index-Blog')