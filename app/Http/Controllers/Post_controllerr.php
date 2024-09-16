<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Post_controllerr extends Controller
{

    ////////////////////////////////////////////////////////////////////////////////////////

    public function index()
    {
        // $Posts=Post::all();
        return view('index',['Posts'=>Post::all()]);
        // return view('index',compact('Posts'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    
    public function create()
    {
        return view('create');

    }

    ////////////////////////////////////////////////////////////////////////////////////////

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'file'=>'required|image|mimes:jpg,jpeg,png,gif|max:1024',
            'content'=>'required',//oblige price yikoun int methode khra fsyntaxe ['required','required']

        ]);
        $Post=new Post();
        
        
        $Post->content= strip_tags($request->input('content'));
        $Post->title=  strip_tags($request->input('title'));
        // $path = $request->file('image')->storeAs('public/images' ,
        //  $request->file('image')->getclinetOriginaleName);

        $Post->picture= strip_tags($request->file->store('file'));//
    
        $Post->save();//save les donnes
        return redirect()->route('post.index');
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    public function show($post)
    {
        
        return view('show',['Post'=>Post::findOrFail($post)]);


    }

    ////////////////////////////////////////////////////////////////////////////////////////
    public function edit($post)
    {
        return view('edit',['Post'=>Post::findOrFail($post)])
        ;}

    ////////////////////////////////////////////////////////////////////////////////////////
    public function update(Request $request,$post)
    {
        $request->validate([
            'title'=>'required',
            'file'=>'required|image|mimes:jpg,jpeg,png,gif|max:1024',
            'content'=>'required',//oblige price yikoun int methode khra fsyntaxe ['required','required']

        ]);
        $update=Post::findOrFail($post);
        
        $update->content= strip_tags($request->input('content'));
        $update->title=  strip_tags($request->input('title'));
        $update->picture= strip_tags($request->file->store('file'));
    
        $update->save();//save les donnes
        return redirect()->route('post.index')->with('success','ADD blog avec succes');

    }

    ////////////////////////////////////////////////////////////////////////////////////////
    public function destroy($post)
    {

        $to_delete = Post::findOrFail($post);
        $to_delete->delete();
        return redirect()->route('post.index');
        // return redirect()->back();

    }
}
