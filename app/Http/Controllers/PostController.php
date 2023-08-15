<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Post;
use App\Comment;
use Session;

use Illuminate\Http\Request;

class PostController extends Controller {

		/*
	 * Display the posts of a particular user
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function create_post()
	{
		return view('admin.create_post');
	}

	public function post(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/post')
                        ->withErrors($validator)
                        ->withInput();
        }
		else 
		{
			$post = new Post();
			$post->users_id = Auth::user()->id;
			$post->title = $request->get('title');
			$post->body = $request->get('body');
			$post = $post->save();

			if($post)
			{			
				Session::flash('message', 'Post Successfully published!');
			}
			else
				Session::flash('error', 'Post do not posted!');

			return Redirect::to('/post');
		}
	}

	public function list_post(Request $request)
	{
		$posts = Post::where('active','1')->orderBy('created_at','desc')->paginate(3);
		return view('all_posts')->withPosts($posts);	
	}

	public function show_post($id)
	{
		$post = Post::where('id',$id)->first();

		if($post)
		{
			if($post->active == false)
				return redirect('/all_posts')->withErrors('requested page not found');
			$comments = $post->comments;	
		}
		else 
		{
			return redirect('/all_posts')->withErrors('requested page not found');
		}
		return view('one_post')->withPost($post)->withComments($comments);
	}
	
	public function add_comment(Request $request)
	{
		//on_post, from_user, body
		$input['users_id'] = Auth::user()->id;
		$input['posts_id'] = $request->input('on_post');
		$input['comment'] = $request->input('body');
		Comment::create( $input );
 
		return redirect('/one_post/'.$request->input('on_post'))->with('message', 'Comment published'); 	
	}

	public function edit_post(Request $request,$id)
	{
		$post = Post::where('id',$id)->first();
		if($post && (Auth::user()->id == $post->users_id || $request->user()->is_admin()))
			return view('edit_post')->with('post',$post);
		else 
		{
			return redirect('/all_posts')->withErrors('you have not sufficient permissions');
		}
	}

	public function update_post(Request $request)
	{
		$post_id = $request->input('post_id');
		$post = Post::find($post_id);
		if($post && ($post->users_id == Auth::user()->id  || $request->user()->is_admin()))
		{
			$post->title = $request->input('title');	 
			$post->body = $request->input('body');
			$post->save();
	 		return redirect('/one_post/'.$post->id);
		}
		else
		{
			return redirect('/all_posts');
		}
	}
}

