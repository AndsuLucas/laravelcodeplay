<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use Request;

class PostController extends Controller
{
   
   	public function showPosts(Request $request)
   	{	
   		$posts = Post::all();
   		
   		$array_posts = array();

   		return view('post.posts')->with('posts',$posts);
   	}


   	public function returnFormCreatePosts()
   	{
   		return view('post.post_create');
   	}

   	public function createPost(Request $request)
   	{	
   		
   		//dd($request);
   		$post_form_data = $request->except('send');
   	
   		Post::create($post_form_data);

   		return redirect('/');
   	}

   	public function viewPost(Request $request)
   	{
   		$id_post = $request->route('id');
   		$post_row = Post::find($id_post);   

   		return View('post.post_view')->with('post', $post_row);


   	}

   	public function returnUpdateForm(Request $request)
   	{
   		$id_post  = $request->route('id');
   		$tbl_post_row = Post::find($id_post);

   		return View('post.post_update', $tbl_post_row);
   		
	}



}
