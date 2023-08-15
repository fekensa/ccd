<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Message;
use App\Feedback;
use App\User;
use App\Message_reply;
use Session;

use Illuminate\Http\Request;

class MessageController extends Controller {

		/*
	 * Display the posts of a particular user
	 * 
	 * @param int $id
	 * @return Response
	 */

	public function customer_message()
	{
		return view('customer.message');
	}

	public function admin_message()
	{
		$custs = User::where('role','Customer')->orderBy('first_name','asc')->get();
		return view('admin.message', ['custs' => $custs]);
	}

	public function show_feedback()
	{
		$feedbacks = Feedback::where('active','1')->orderBy('created_at','desc')->paginate(3);
		return view('admin.feedback')->withFeedbacks($feedbacks);
	}

	public function a_show_message(Request $request)
	{
		$user = $request->user();
		$messages = Message::where('users_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(3);
		$name = $user->first_name;
		return view('admin.all_messages')->withMessages($messages)->withName($name);
	}

	public function c_show_message(Request $request)
	{
		$messages = Message::where('users_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(3);
		return view('customer.all_messages')->withMessages($messages);
	}
	
	public function customer_send(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('cust_message')
                        ->withErrors($validator)
                        ->withInput();
        }
		else 
		{
			$message = new Message();
			$message->users_id = '1';
			$message->sender = Auth::user()->id;
			$message->cc = 'Administrator';
			$message->subject = $request->get('subject');
			$message->body = $request->get('body');

			$message = $message->save();

			if($message)
			{			
				Session::flash('message', 'Message Successfully sent to Administator!');
			}
			else
				Session::flash('error', 'Message not sent to Administrator please try again!');

			return Redirect::to('cust_message');
		}
	}

	public function admin_send(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'to' => 'required',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin_message')
                        ->withErrors($validator)
                        ->withInput();
        }
		else 
		{
			$message = new Message();
			$message->users_id = $request->get('to');
			$message->sender = Auth::user()->id;
			$message->cc = 'Administrator';
			$message->subject = $request->get('subject');
			$message->body = $request->get('body');

			$message = $message->save();

			if($message)
			{			
				Session::flash('message', 'Message Successfully sent to Customer!');
			}
			else
				Session::flash('error', 'Message not sent to Customer please try again!');

			return Redirect::to('admin_message');
		}
	}

	public function send_feedback(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'comment' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
		else 
		{
			$feedback = new Feedback();
			$feedback->name = $request->get('name');
			$feedback->email = $request->get('email');
			$feedback->comment = $request->get('comment');

			$feedback = $feedback->save();

			if($feedback)
			{			
				Session::flash('message', 'Feedback Successfully sent to Administator Thank you!');
			}
			else
				Session::flash('error', 'Feedback not sent to Administrator please try again!');

			return Redirect::to('/');
		}
	}

	public function show_ind_mess($id)
	{
		$message= Message::where('id',$id)->first();

		if($message)
		{
			if($message->active == false)
				return redirect('/login')->withErrors('requested page not found');
			$message_replies = $message->mreplies;	
		}
		else 
		{
			return redirect('/login')->withErrors('requested page not found');
		}
		return view('ind_message')->withMessage($message)->withMessage_replies($message_replies);
	}

	public function add_reply(Request $request)
	{
		$reply = new Message_reply();
		$reply->replied_by = Auth::user()->id;
		$reply->messages_id = $request->get('on_message');
		$reply->body = $request->get('body');
		$reply = $reply->save();

		$message = new Message();
		$message->users_id = $request->get('receiver');		
		$message->sender = Auth::user()->id;
		$message->subject = $request->get('subject');
		$message->body = $request->get('body');

		$message = $message->save();
 
		return redirect($request->input('on_message'))->with('message', 'Message replied Successfully'); 	
	}
	
	
}

