@extends('app')
@section('content')

    <div class="my-3">
        <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            
            <center><h3  class="text-success  fw-bold">update  Post</h3></center>
            
            <div class=" p-4">
            <form action="{{route('post.update',$Post->id )  }}" class='row' method="POST"  enctype="multipart/form-data"  >
                @csrf
                @method('PUT')
                <div class="my-2 col-sm-6  col-12">
                    <label class="form-label fw-bold" for='title'> title :</label>
                    <input type="text" name="title" value="{{$Post->title}} "  class="form-control ">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

        
                <div class="my-2 col-sm-6  col-12">
                    <label class="form-label fw-bold" for='image'> image :</label>
                    <input type="file" name="file" value="{{$Post->picture}}"    class="form-control" >
                    <img src="{{asset('storage/'.$Post['picture']) }}" alt='image'>
                    @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="my-2  col-12">
                    <label class="form-label fw-bold" for='title'> content :</label>
                    <textarea name="content" class="form-control"  placeholder="Post Content">{{$Post->content}}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="my-2 col-12">
                <input type="submit" value="submit" class="btn btn-success">
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

@endsection
@section('title','create-Blog')