<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		//$posts = Post::all();
		//dd($posts);
		
		//$posts = Post::find(1);
		//dd($posts);
		
		//$posts = Post::where('id',2)->first();
		//dd($posts);
		
		//dd($posts->content);
		//dd($posts->title);
		
		//dd($posts->user);
		
		//uvjeti...
		//$posts = Post::where('id',2)->get();
		//$posts = Post::where('id','<',3)->get();
		//dd($posts);
		
		//sortiranje
		//$posts = Post::where('id','<',3)->orderBy('title','asc')->get();
		//$posts = Post::where('id','<',3)->orderBy('title','desc')->get();
		//dd($posts);
		
		//$posts = Post::where('id',2)->first();
		//dd($posts);
		
		//$posts = Post::where('id',2)->paginate(5);
		//dd($posts);
		
		//dohvati sve postove, prikazi samo 1 po stranici
		//$posts = Post::paginate(1);
		//$posts = Post::paginate(2);
		//dd($posts);
		
        //return view('index');
		
		$posts = Post::orderBy('created_at','desc')->paginate(20);
		
		return view('index')->with('posts',$posts);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


}
