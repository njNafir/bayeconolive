<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSettingController extends Controller
{
	// https://www.qcode.in/save-laravel-app-settings-in-database/
    public function index(){
	    return view('admin.settings.index');
	}

	public function store(Request $request){
	    $rules = \App\Setting::getValidationRules();
	    $this->validate($request, $rules);

	    $data = $request->all();
	    // dd($data);
	    // dd(\App\Setting::getDataType('app_header_logo'));


	    // dd($_FILES);
	  //   if(request()->hasfile('app_header_logo')) {
			// $file = $request->file('app_header_logo');
		 //    $extension = $file->getClientOriginalExtension(); // getting image extension
		 //    $filename = remove_space_dots_replace_underscore($request->title) . '_' . time() . '.'.$extension;
		 //    $file->move(public_path('uploads/settings/'), $filename);
		 //    $data['app_header_logo'] = $filename;
		   //      } 

	    // if($file_upload_data = \App\Setting::save_and_return_file_data('app_header_logo')){
	    // 	$data['app_header_logo'] = $file_upload_data;
	    // }


    	// end file upload


	    $validSettings = array_keys($rules);
	    //dd($request->all());

	    foreach ($data as $key => $val) {
	        if (in_array($key, $validSettings)) {
	        	if(\App\Setting::getDataType($key) == 'file'){ // when file upload 
	        		if(request()->hasfile($key)){
	        			$val = \App\Setting::save_and_return_file_data($key);	
	        		}
	        	}
	            \App\Setting::add($key, $val, \App\Setting::getDataType($key));
	        }
	    }

	    // $url = back()->getTargetUrl() . '?week=' . '2' . '&year=' . 'd';
		// return redirect($url)->with('status', 'Settings has been saved.');
	    return redirect()->back()->with('status', 'Settings has been saved.');
	}

	public function dashboard(){
		return view('admin.pages.home');
	}


	public function delete_photo($column, $field){
		DB::table($column)->where('name', 'John')->first();
	}
}
