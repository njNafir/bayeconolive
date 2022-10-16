<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    private $validate_rules = [
            'title' => 'required|max:255',
            'body' => '',
            'slug' => 'unique:pages',
            'status' => 'required',
    ];

    private $validate_rules_update = [
            'title' => 'required|max:255',
            'body' => '',
            'status' => 'required',
    ];

    public function index(){
    	$pages = \App\Page::paginate(10);
    	return view('admin.pages.index', compact('pages'));
    }

    

    public function show($id){
    	$page = \App\Page::find($id);
    	return view('admin.pages.show', compact('page'));
    }

    public function edit($id){
        $page = \App\Page::find($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function create(){
    	return view('admin.pages.create');
    }

    public function update($id, Request $request){
        $page = \App\Page::find($id);
        $this->validate($request, $this->validate_rules_update);
        $post_data = request()->all();


        if(request()->hasfile('photo')) {
            $page_photo = public_path("uploads/pages/{$page->photo}"); // get previous image from folder
            if (\File::exists($page_photo)) { // unlink or remove previous image from folder
                unlink($page_photo);
            }
            
            $file = $request->file('photo');
              $extension = $file->getClientOriginalExtension(); // getting image extension

              $filename = remove_space_dots_replace_underscore($request->title) . '_' . time() . '.'.$extension;

              $file->move(public_path('uploads/pages/'), $filename);
              $post_data['photo'] = $filename;
              
        } else {
            unset($post_data['photo']);
        }

        
        // slug
        if(!$post_data['slug']){
            $post_data['slug'] = remove_space_dots_replace_hyphen($post_data['title']);
        } else {
            $post_data['slug'] = remove_space_dots_replace_hyphen($post_data['slug']);
        }

        unset($post_data['files']);
        $update = $page->update($post_data);

        if($update){
            return back()->with('message', 'Page Updated Succesfully');
        }
    }

    public function store(Request $request){

        $this->validate($request, $this->validate_rules);

        $post_data = request()->all();

        // slug
        if(!$post_data['slug']){
            $post_data['slug'] = remove_space_dots_replace_hyphen($post_data['title']);
        } else {
            $post_data['slug'] = remove_space_dots_replace_hyphen($post_data['slug']);
        }

        unset($post_data['files']);

        if($request->hasfile('photo')) 
        { 
          $file = $request->file('photo');
          $extension = $file->getClientOriginalExtension(); // getting image extension

          $filename = remove_space_dots_replace_underscore($request->title) . '_' . time() . '.'.$extension;

          $file->move(public_path('uploads/pages/'), $filename);
          $post_data['photo'] = $filename;
        }


        $save = \App\Page::create($post_data);

        if($save){
            return redirect()->action('AdminPageController@index')->with('message', 'Page Added Succesfully');
        }
    }

    public function destroy($id){
        $delete = \App\Page::find($id)->delete();
        if($delete){
            return back()->with('message', 'Page Deleted Succesfully');
        }
    }
}
