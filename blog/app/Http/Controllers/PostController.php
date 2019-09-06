<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use App\Http\Middleware\MeuMiddlaware;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

//use Request;

class PostController extends Controller
{
	public function __construct()
	{
		//$this->middleware('mymidd')->only('createPost');
		$this->middleware('auth');
	}

  	/**
  	 * mostra todos os posts
  	 * @param  Request $request
  	 * @return mixed
  	 */
   	public function showPosts(Request $request)
   	{

   	    $posts = (object) Auth::user()->profile->posts->all();

   		/* mostrando formas de passar dados na view */
		//return view('post.posts')->with('posts',$posts);
   		return view('post.posts', ['posts' => $posts]);

   	}


   	public function returnFormCreatePosts()
   	{

   	    return view('post.post_create');

   	}

   	public function createPost(PostRequest $request)
   	{

   		//dd($request);
   		/*$post_form_data = $request->validate([
   			'title' => 'required|unique:posts|max:255',
   			'body'  => 'required|min:50'
   		]);
   		*/

   		$post_form_data = (object) $request->all();

   		$result = Post::create([
   		    'profile_id' => Auth::user()->profile->id,
            'title'      => $post_form_data->title,
            'body'       => $post_form_data->body
        ]);

   		return redirect('/');
   	}

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
   	public function viewPost(Request $request)
   	{
   		$id_post = $request->route('id');
   		$post_row = Post::find($id_post);

   		return View('post.post_view')->with('post', $post_row);


   	}

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
   	public function updatePost(Request $request)
   	{
   		$id_post  = $request->route('id');
   		$post = Post::find($id_post);


   		if ($request->isMethod('get')) {

   			return View('post.post_update')->with('post', $post);

   		}

   		$form_data = $request->all();
   		$post->update($form_data);

   		return redirect('/post/view/'.$id_post);

   	}

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */

    public function deletePost(Request  $request)
   	{

   		$id_post = $request->route('id');
   		$post    = Post::find($id_post);

   		if ($request->isMethod('get')) {
   			return View('post.post_delete')->with('post', $post);
   		}


   		$post->delete();
   		return redirect('/');

   	}
}

