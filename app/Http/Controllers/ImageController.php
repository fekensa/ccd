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
use App\Image;
 
class ImageController extends Controller
{
 
    public function index()
    {
        $images = Image::all();
        return view('images.index')->with('images', $images);
    }
 
    public function create()
    {
        return view('images.create');
    }
 
    public function store(Request $request)
    {
    	$users_id = $request->input('users_id');

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:5'],
            'photo' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:8192'],
        ]);

        if ($validator->fails()) {
            return redirect('/cust_upload/'.$users_id)
                        ->withErrors($validator)
                        ->withInput();
        }
		else 
		{		
	        $data = $request->all();
	 
	        $photo = $request->file('photo')->getClientOriginalName();
	        $destination = base_path() . '/public/uploads';
	        $request->file('photo')->move($destination, $photo);
	        	 
	        $data['photo'] = $photo;	 
	        Image::create($data);
	 
	        return redirect('/cust_upload/'.$users_id)->with('message', 'Image Saved')->withInput();
       	}
    }
}