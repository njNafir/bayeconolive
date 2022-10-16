<?php

namespace App;

class Menu extends Model
{
    public static $menu_type = [
    	'1' => 'Page',
    	'2' => 'Post',
    	'3' => 'Category',
    	'4' => 'Link'
    ];


    public static function get_menu_data($menu_slug){
    	$menu = self::where('slug', $menu_slug)->first();
    	if($menu){
    		$menu = $menu->toArray();
    		return json_decode($menu['value'], true);
    	}
    	return false;
    	
    }

    public static function show_menu($menu_slug){

    	// '1' => 'Page',
    	// '2' => 'Post',
    	// '3' => 'Category',
    	// '4' => 'Link'


    	// "MENU_TYPE" => "1"
	    // "CAT_ID" => "2"
	    // "POST_ID" => ""
	    // "PAGE_ID" => "1"
	    // "TEXT" => "PAGE 1"
	    // "ICON" => ""
	    // "HREF" => ""
	    // "TARGET" => "_SELF"
	    // "TITLE" => ""
	    // "MENU_SLUG" => ""


    	$menu_data = self::get_menu_data($menu_slug);

    	if(!$menu_data){
    		return false;
    	}
    	// dd($menu_data);
    	$out = '';
    	foreach ($menu_data as $head_menu) {

    		$out .= self::write_menu_by_item_array($head_menu);
    	}
    	// dd($out);
    	return $out;
    }

    public static function write_menu_by_item_array($item_menu){

    		$menu_type = (int) $item_menu['menu_type'];

    		$action_or_url = '';

    		if($menu_type == 1){
    			// its page
    			$action_or_url = action('WebController@page_show', (int) $item_menu['page_id']);
    		}

    		if($menu_type == 2){
    			// its Post
    			$action_or_url = action('BlogPostController@show', $item_menu['post_id']);
    		}

    		if($menu_type == 3){
    			// Blog Category Post
    			$action_or_url = action('BlogPostController@by_category', $item_menu['cat_id']);
    		}

    		if($menu_type == 4){
    			// Blog Category Post
    			$action_or_url = $item_menu['href'];
    			
    		}

    		$out = '<li><a href="' . $action_or_url .'">'. $item_menu['text'] .'</a>';

    		// $out .= 'Hellow'
    		$out .= self::children_data($item_menu);

    		$out .= '</li>';
    		return $out;
    }


    public static function has_children($item){
    	if(isset($item['children'])){
    		return true;
    	}
    	return false;
    }

    public static function children_data($item){
    	if(self::has_children($item)){
    		//dd($item['children']);
    		$out = '<ul class="dropdown">';
    		foreach ($item['children'] as $children) {
	    		$out .= self::write_menu_by_item_array($children);
	    	}
	    	$out .= '</ul>';
	    	// dd($out);
    		return $out;
    	}
    	return '';
    }
}
