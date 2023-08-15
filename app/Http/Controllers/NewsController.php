<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\NewsComment;
use Session;

class NewsController extends Controller
{
 
    public function create()
    {
        return view('news.create');
    }

    public function list_news(Request $request, $type)
    {
        $news = News::where('type',$type)->orderBy('created_at','desc')->paginate(3);
        return view('news.news')->withNews($news)->withType($type);    
    }
 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/add_news')
                        ->withErrors($validator)
                        ->withInput();
        }
        else 
        {
            $news = new News();
            $news->type = $request->get('type') ;
            $news->title = $request->get('title');
            $news->body = $request->get('body');
            $news = $news->save();
            if($news)
            {           
                Session::flash('message', 'News Successfully published!');
            }
            else
                Session::flash('error', 'News do not posted!');

            return Redirect::to('/add_news');
        }
    }

    public function show_news($id)
    {
        $news= News::where('id',$id)->first();

        if($news)
        {
            if($news->active == false)
                return redirect('/new/'.$news->type)->withErrors('requested page not found');
            $news_comment = $news->new_comments;  
        }
        else 
        {
            return redirect('/new/'.$news->type)->withErrors('requested page not found');
        }
        return view('news.show')->withNews($news)->withNews_comment($news_comment);
    }

    public function news_comment(Request $request)
    {
        $comment = new NewsComment();
        $comment->news_id = $request->get('on_news');
        $comment->name = $request->get('name');
        $comment->comment = $request->get('comment');
        $comment = $comment->save();
 
        return redirect('/news/'.$request->input('on_news'))->with('message', 'News replied Successfully');    
    }

    public function edit_news(Request $request,$id)
    {
        $news = News::where('id',$id)->first();
        if($news)
            return view('news.edit_news')->with('news',$news);
        else 
        {
            return redirect('/new/'.$news->type)->withErrors('requested page not found');
        }
    }

    public function update_news(Request $request)
    {
        $news_id = $request->input('news_id');
        $news = News::find($news_id);
        if($news)
        {
            $news->title = $request->input('title');     
            $news->body = $request->input('body');
            $news->save();
            return redirect('/news/'.$news_id)->with('message', 'News edited Successfully'); 
        }
        else
        {
            return redirect('/new/'.$news->type)->withErrors('requested page not found');
        }
    }
}