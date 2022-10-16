<?php

namespace App;

use Flash;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $guard_name = 'web';
    public $upload_path = 'uploads';
    public $search_fields = [];
    protected $guarded = [];

    public function scopeWithSearch($query){
        $keyword = request()->keyword;
        $search_fields = $this->search_fields;
        // dd($search_fields);

        if(request('keyword')){

            if(count($search_fields)){
                foreach ($search_fields as $field) {
                    $query = $query->orWhere( $field, 'like', '%' . $keyword . '%');
                }
            }
        }
        return $query;
    }

    public static function if_logged_user_student_and_not_premium(){
        if(auth()->user()->hasRole('Student')){
            if(!is_student_and_premium()){
                return true;
            }
        }
        return false;
    }

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public function scopeVerify($query){
        return $query->delete();
    }


    public function status_buttons($field='status'){
        $status = $this->getOriginal($field);

        if($status){
            return '<button type="button" class="btn btn-success btn-sm">Yes</button>';
        }
        return '<button type="button" class="btn btn-danger btn-sm">No</button>';
    }

    public function uploadFile($field, $save_title='', $path=null){
    	//dd($field_name);
        $path = $path ? $path : $this->upload_path;
        if(request()->hasfile($field)) 
        { 
          $field_instance = request()->file($field);
          if($field_instance){
                $extension = $field_instance->getClientOriginalExtension(); // getting image extension
                $filename = remove_space_dots_replace_underscore($save_title) . '_' . time() . mt_rand(1000, 9999) . '.'.$extension;
                $field_instance->move(public_path($path), $filename);
                return $filename;
            }
        }
		return null;
    }

    public function deleteImage($field)
    {
        $image = $this->getOriginal($field);
        if (empty($image)) {
            return true;
        }
        // dd($this->getOriginal($field));
        $post_data_photo = public_path($this->upload_path . "/{$image}"); // get previous image from folder
        if (\File::exists($post_data_photo)) { // unlink or remove previous image from folder
            unlink($post_data_photo);
        }
    }

    public function delete_existing_and_upload_file($field, $save_title='', $path=null){
        if(request()->hasfile($field)) 
        { 
          $this->deleteImage($field); // if older image exists

          $filename = $this->uploadFile($field, $save_title, $path);
          return $filename;
        }
        return $this->$field;

    }

    public function imageToShow( $field='image', $upload_directory=null, $width="50"){
        $path = $upload_directory ? $upload_directory : $this->upload_path;

        $post_data_photo = public_path($path . "/{$this->$field}"); // get previous image from folder
        if (\File::exists($post_data_photo) && $this->$field) { // unlink or remove previous image from folder
            return "<img width='{$width}' src='". asset($path) . '/' . $this->$field."'>";
            
        }

        return '';
    }


    public function attachmentShowButton( $field='attachment', $upload_directory=null, $new_tab=true){
        $path = $upload_directory ? $upload_directory : $this->upload_path;

        $post_data_photo = public_path($path . "/{$this->$field}"); // get previous image from folder
        if (\File::exists($post_data_photo) && $this->$field) { // unlink or remove previous image from folder
            $new_tab_attr = $new_tab ? "target='_blank'" : "target='_self'";
            return "<a " . $new_tab_attr . "class='btn btn-primary' href='". asset($path) . '/' . $this->$field ."'>Show</a>";
            // return "<img width='{$width}' src='". asset($path) . '/' . $this->$field."'>";
            
        }

        return '';
    }

    public function imageToShowWithDeleteButton($model, $field='image', $upload_directory=null, $width="50"){
        $out = $this->imageToShow($field, $upload_directory, $width);

        $out .= '<a class="btn btn-danger btn-xs del" href="';
        $out .= action('SettingController@delete_image_by_table_id_field', ['model' => $model, 'id' => $this->id, 'field' => $field]);
        $out .= '">Delete</a>';
        return $out;


    }



    public static function ajaxUploadFile($field_instance = null, $save_title='', $path = 'uploads/media_srcs/', $class=""){
        //dd($field_name);
        if($field_instance){
            // dd($field_instance);
            $extension = $field_instance->getClientOriginalExtension(); // getting image extension
            $filename = remove_space_dots_replace_underscore($save_title) . '_' . time() . mt_rand(1000, 9999) . '.'.$extension;
            $field_instance->move(public_path($path), $filename);
            $output = array(
             'success' => 'Image uploaded successfully',
             'image'  => '<img src="/'.$path.'/'.$filename.'" class="'.$class.'" />',
             'uploaded_name' => $filename
            );
            return $output;
        }
        return null;
    }
}


