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
use App\House;
use App\Address;
use App\Feedback;
use App\Image;
use Session;

use Illuminate\Http\Request;

class UserController extends Controller {

		/*
	 * Display the posts of a particular user
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function open_login()
	{
		return view('ccd');
	}

	public function admin()
	{
		return view('admin.admin-home');
	}
	
	public function customer()
	{
		$images = Image::where('users_id', Auth::id())->get();
		return view('customer.customer')->with('images', $images);
	}

	public function login(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput(Input::except('password'));
        }
		else 
		{
		    // create our user data for the authentication
		    $userdata = array(
		        'email'  => Input::get('username'),
		        'password'  => Input::get('password'),
		        'role' => Input::get('role')
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdata, $request->has(Input::get('remember')))) {

		    	//$countf = Feedback::where('active', 1)->count();

		    	if($request->user()->is_admin())
				{
			        // validation successful!
			        // redirect them to the secure section or whatever
			        return Redirect::intended('/admin');
			        //return view('admin.admin');
			        // for now we'll just echo success (even though echoing in a controller is bad)
			        //return redirect()->intended('admin.admin');
		    	}
		    	else
		    	{
		    		$images = Image::where('users_id', Auth::id())->get();
		    		return Redirect::intended('/cust')->with('images', $images);
		    	}	
		    } 
		    else 
		    {  
		    	$error = 'Sorry, The credentials are not correct!';
		        // validation not successful, send back to form @W@
            	return redirect('login')
                        ->withErrors($error)
                        ->withInput(Input::except('password'));
		    }

		}        
	}

	public function logout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('login'); // redirect the user to the login screen
	}
	public function new_user(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'email' => 'email|required',
            'site_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin')
                        ->withErrors($validator)
                        ->withInput();
        }
		else 
		{
			//$user = new User();
			$house = new House();
			$address = new Address();

			$input['first_name'] = $request->input('first_name');
			$input['middle_name'] = $request->input('middle_name');
			$input['last_name'] = $request->input('last_name');
			$input['email'] = $request->input('email');
			$input['mobile'] = $request->input('mobile');
			$input['gender'] = $request->input('gender');
			$input['role'] = $request->input('role');
			$input['password'] = bcrypt('123456');
						
			$house->house_type = $request->get('house_type');
			$house->site_name = $request->get('site_name');
			$house->progress_in_percent = '0';

			$address->country = 'Ethiopia';
			$address->region_or_state = $request->get('region');
			$address->city = $request->get('city');
			$address->subcity = $request->get('subcity');
			$address->woreda = $request->get('woreda');
			$address->kebele = $request->get('kebele');			

			$user = User::create($input);

			$house->owner()->associate($user);

			$address->userA()->associate($user);

			$address->users_id = $user->id;
			$house->users_id = $user->id;

			$house->save();
			$address->save();
			//$user->houses()->save($house);
			//$user->addresses()->save($address);

			if($user)
			{
				//$user= User::find($user->id);
				//$address->users_id = $user->id;
				//$address = $address->save();
				//$user->addresses()->save($address);

				//$house->users_id = $user->id;
				//$house = $house->save();
				//$user->houses->save($house);

				//if(!$house || !$address)
					//Session::flash('error', 'User registred but St was wrong with your house or address!');

				Session::flash('message', 'User Created Successfully!');
			}
			else
				Session::flash('error', 'Whoops Something wrong with your input please try again!');
			return Redirect::to('admin');
		}
	}

	public function profile(Request $request, $id) 
	{
		$data['user'] = User::find($id);
		if (!$data['user'])
			return redirect('/cust');

		return view('customer.profile', $data);

	}

	public function edit_profile(Request $request, $id)
	{
		$user = User::where('id',$id)->first();
		if($user)
			return view('edit_profile')->with('user',$user);
		else 
		{
			return redirect('/cust')->withErrors('error');
		}
	}

	public function update_user(Request $request)
	{
		$user_id = $request->input('user_id');
		$user = User::find($user_id);
		$address = $user->addresses;
		$house = $user->houses;
		if($user)
		{
			$user->first_name = $request->input('first_name');	
			$user->middle_name = $request->input('middle_name');
			$user->last_name = $request->input('last_name');
			$user->email = $request->input('email');
			$user->mobile = $request->input('mobile');
			$user->phone = $request->input('phone');
			$user->gender = $request->input('gender');
			$user->role = $request->input('role');
			$user->password = bcrypt($request->input('password'));

			$user->save();


			$address->country = $request->input('country');
			$address->region_or_state = $request->input('region_or_state');
			$address->city = $request->input('city');
			$address->subcity = $request->input('subcity');
			$address->woreda = $request->input('woreda');
			$address->kebele = $request->input('kebele');	

			$address->save();

			$house->house_type = $request->input('house_type');
			$house->site_name = $request->input('site_name');
			$house->progress_in_percent = $request->input('progress_in_percent');

			$house->save();

	 		return redirect('/user/'.$user->id);
		}
		else
		{
			return redirect('/cust');
		}
	}

	public function open_customer()
	{
		$custs = User::where('role','Customer')->orderBy('first_name','asc')->get();
		return view('admin.open_cust', ['custs' => $custs]);
	}

	public function open_customer_upload()
	{
		$custs = User::where('role','Customer')->orderBy('first_name','asc')->get();
		return view('admin.open_cust_upload', ['custs' => $custs]);
	}

	public function open_customer_profile(Request $request)
	{
		$user_id = $request->input('customer');
		$user = User::where('id',$user_id)->first();
		if($user)
			return view('edit_profile')->with('user',$user);
		else 
		{
			return redirect('/admin')->withErrors('error');
		}
	}

	public function open_upload_page(Request $request)
	{
		$user_id = $request->input('customer');
		$user = User::where('id',$user_id)->first();
		if($user)
			return view('admin.image_upload')->with('user',$user);
		else 
		{
			return redirect('/admin')->withErrors('error');
		}
	}

	public function upload_page(Request $request,$id)
	{
		$user_id = $id;
		$user = User::where('id',$user_id)->first();
		if($user)
			return view('admin.image_upload')->with('user',$user);
		else 
		{
			return redirect('/admin')->withErrors('error');
		}
	}
}

