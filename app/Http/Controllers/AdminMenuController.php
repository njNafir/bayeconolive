<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMenuController extends Controller
{
    public function index(){
        $menus = \App\Menu::paginate(10);
        return view('admin.menus.index', compact('menus'));
    }

    public function show($id){
        $menu = \App\Menu::find($id);
        return view('admin.menus.show', compact('menu'));
    }

    public function edit($id){
        $menu = \App\Menu::find($id);
        return view('admin.menus.edit', compact('menu'));
    }

    public function create(){
        return view('admin.menus.create');
    }

    public function update($id, Request $request){
        $menu = \App\Menu::find($id);
        $post_data = request()->all();
        $update = $menu->update($post_data);
        if($update){
            return redirect()->action('AdminMenuController@index')->with('message', 'Menu Updated Succesfully');
        }
    }

    public function store(Request $request){


        $post_data = request()->all();
        $save = \App\Menu::create($post_data);
        if($save){
            return redirect()->action('AdminMenuController@index')->with('message', 'Menu Added Succesfully');
        }
    }

     public function store_menu_settings($menu_id = null){
        $menu_settings = request('menu_settings');

        if($menu_id){
            $menu = \App\Menu::find($menu_id);

            if($menu){

                $settings = $menu->update([
                    'value' => $menu_settings
                ]);

                if($settings){
                    return response()->json($settings, 200);
                }  
            }
        }
        
    }

    // public function store_menu_settings(){
    //  $menu_settings = request('menu_settings');
    //  $settings = \App\Menu::updateOrCreate(['name' => 'settings'],[
    //      'value' => $menu_settings
    //  ]);
    //  if($settings){
    //      return response()->json($settings, 200);
    //  }
    // }


    public function fetch_menu_settings($menu_id){
        $menu_settings = request('menu_settings');
        $settings = \App\Menu::find($menu_id);
        if($settings){
            return response()->json($settings->value, 200);
        }
    }
}
