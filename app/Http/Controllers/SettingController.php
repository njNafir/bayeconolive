<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

class SettingController extends Controller
{
    public function delete_image_by_table_id_field($model,$id,$field){

    	$namespace = '\App\Models\\';
        // dd($namespace);
    	$model = ucfirst($model);
    	$MODEL = $namespace .  $model;
    	$record = $MODEL::find($id);
    	if($record){
    		$record->deleteImage($field);
    		$record->update([$field => '']);
    		Flash::success('Image deleted successfully.');
    		return back();
    	}
    }
}
