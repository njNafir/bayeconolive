<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageCategoryController extends Controller
{
    private $validate_rules = [
            'name' => 'required',
            'status' => 'required',
    ];

    private $validate_rules_update = [
            'name' => 'required',
            'status' => 'required',
    ];

    public function index(){
    	$page_categories = \App\PageCategory::paginate(10);
    	return view('admin.page_categories.index', compact('page_categories'));
    }

    public function search(Request $request)
    {
    
        $keyword = $request->keyword;
        $search_fields = \App\PageCategory::$search_fields;
        $result =   new \App\PageCategory;

        if(request('keyword')){

            if(count($search_fields)){
                foreach ($search_fields as $field) {
                    $result = $result->orWhere( $field, 'like', '%' . $keyword . '%');
                }
            }
        }

        return view('admin.page_categories.index', ['page_categories'=> $result->paginate(10)]);
    }

    public function show($id){
    	$page_category = \App\PageCategory::find($id);
    	return view('admin.page_categories.show', compact('page_category'));
    }

    public function edit($id){
        $page_category = \App\PageCategory::find($id);
        return view('admin.page_categories.edit', compact('page_category'));
    }

    public function create(){
    	return view('admin.page_categories.create');
    }

    public function update($id, Request $request){
        $page_category = \App\PageCategory::find($id);
        $this->validate($request, $this->validate_rules_update);
        $post_data = request()->all();
        $update = $page_category->update($post_data);

        if($update){
            return redirect()->action('AdminPageCategoryController@index')->with('message', 'Category Updated Succesfully');
        }
    }

    public function store(Request $request){
        $this->validate($request, $this->validate_rules);

        $post_data = request()->all();

        $save = \App\PageCategory::create($post_data);

        if($save){
            return redirect()->action('AdminPageCategoryController@index')->with('message', 'Category Added Succesfully');
        }
    }

    public function destroy($id){
        $delete = \App\PageCategory::find($id)->delete();
        if($delete){
            return back()->with('message', 'Category Deleted Succesfully');
        }
    }
}
