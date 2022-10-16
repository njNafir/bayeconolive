<?php

use App\User;

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Setting();
        }

        if (is_array($key)) {
            return \App\Setting::set($key[0], $key[1]);
        }

        $value = \App\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}


function if_its_edit_route($segment = null){
	// If you only know it's the last segment

	if($segment){// if you know the segment postion
		$segment = (int) $segment;
		$param = request()->segment($segment);
	} else { // if you don't know got the last segment
		$segments = request()->segments();
	    $param = array_pop($segments);
	}
    if($param == 'edit'){
    	return true;
    }
    return false;
}

function get_logged_student_id(){
    return \App\User::get_logged_student_id();
}

function get_logged_student(){
    return \App\User::get_logged_student();
}

function get_logged_teacher_id(){
    return \App\User::get_logged_teacher_id();
}

function get_logged_teacher(){
    return \App\User::get_logged_teacher();
}


function is_logged_student_premium(){
	return \App\Models\Transaction::is_logged_student_premium();
}

function is_student_and_premium(){
    return \App\User::is_student_and_premium();
}

function is_logged_user_teacher(){
    return \App\User::is_logged_user_teacher();
}

function is_logged_user_student(){
    return \App\User::is_logged_user_student();
}

function own_teacher_id_restriction($teacher_id){
	return \App\User::own_teacher_id_restriction($teacher_id);
}

function own_student_id_restriction($student_id){
	return \App\User::own_student_id_restriction($student_id);
}



/**
 * @return int
 */
function getLoggedInUserId()
{
    return Auth::id();
}

/**
 * @return User
 */
function getLoggedInUser()
{
    return Auth::user();
}

/**
 * return avatar full url.
 *
 * @param  int  $userId
 * @param  string  $name
 *
 * @return string
 */
function getUserImageInitial($userId, $name)
{
    return getAvatarUrl()."?name=$name&size=30&rounded=true&color=fff&background=".getRandomColor($userId);
}

/**
 * return avatar url.
 *
 * @return string
 */
function getAvatarUrl()
{
    return 'https://ui-avatars.com/api/';
}

/**
 * Generate Unique key
 *
 * @return string
 */
function generateUniqueKey()
{
    return substr(md5(uniqid(rand(), true)), 0, 16);
}

/**
 * return random color.
 *
 * @param  int  $userId
 *
 * @return string
 */
function getRandomColor($userId)
{
    $colors = ['329af0', 'fc6369', 'ffaa2e', '42c9af', '7d68f0'];
    $index = $userId % 5;

    return $colors[$index];
}

// if (! function_exists('setting')) {


	function current_domain(){
		$protocol =  stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
		$domainName = $_SERVER['HTTP_HOST'];
		return $protocol . $domainName;
	    // $pu = parse_url($_SERVER['REQUEST_URI']);
	    // return $pu["scheme"] . "://" . $pu["host"];
	}

    function my_setting($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Setting();
        }

        if (is_array($key)) {
            return \App\Setting::set($key[0], $key[1]);
        }

        $value = \App\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
// }

function displayArrayRecursively($arr, $indent='') {
    if ($arr) {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                //
                displayArrayRecursively($value, $indent . '&nbsp;&nbsp;');
            } else {
            	// dd($arr);
            	if($key == 'id'){
            		echo '<li>' . $indent . '<label><input value="'.$arr[$key].'" type="checkbox" name="post_category[]" checked="checked">'.$arr['name'].'</label></li>';
	                // echo "$indent $value <br />";
            	}
            }
        }
    }
}


// function displayArrayRecursively($array)
// {
//     // Loops through each element. If element again is array, function is recalled. If not, result is echoed.
//     foreach ($array as $key => $value)
//     {
//         if (is_array($value))
//         {
//             displayArrayRecursively($value); // Or
//             // traverseArray($value);
//         }
//         else
//         {
//             echo $key . " = " . $value . "<br />\n";
//         }
//     }
// }

function limitString($string, $limit = 100) {
    // Return early if the string is already shorter than the limit
    if(strlen($string) < $limit) {return $string;}

    $regex = "/(.{1,$limit})\b/";
    preg_match($regex, $string, $matches);
    return $matches[1];
}

function pr($print, $die=false){
	echo "<pre>";
	print_r($print);
	echo "</pre>";
	if($die) die();
}

function on_bdt($amount, $raw=false){
	if(!$amount){
		return '৳' . 0;
	}
	return '৳' . number_format($amount, 2);
}

function get_youtube_id_via_link($url){
	parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
	return $my_array_of_vars['v'];    
}

function remove_dots($string){
	return str_replace(".", "", $string);
}
function replace_hyphen_with_spaces($string){
	return str_replace(' ', '-', $string);
}
function replace_underscore_with_spaces($string){
	return str_replace(' ', '_', $string);
}

function remove_space_dots_replace_underscore($string){
	$lower_case = strtolower($string);
	$remove_dots = remove_dots($lower_case);
	$remove_space = replace_underscore_with_spaces($remove_dots);
	return $remove_space;
}
function remove_space_dots_replace_hyphen($string){
	$lower_case = strtolower($string);
	$remove_dots = remove_dots($lower_case);
	$remove_space = replace_hyphen_with_spaces($remove_dots);
	return $remove_space;
}

function formated_date($date){
	return \Carbon\Carbon::parse($date)->toFormattedDateString();
}

function myText($title, $field, $value, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::text($field, $value, $attr);
	$out .= '</div>';
	$out .= '</div>';

	return $out;
}

function myNumber($title, $field, $value, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::number($field, $value, $attr);
	$out .= '</div>';
	$out .= '</div>';

	return $out;
}

function mySubmit($title, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'></label>";
	$out .= '<div class="col-md-10">';
	$out .=  Form::submit($title, $attr);
	$out .= '</div>';
	$out .= '</div>';

	return $out;
}

function myTextArea($title, $field, $value, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::textarea($field, $value, $attr);
	$out .= '</div>';
	$out .= '</div>';

	return $out;
}


function myEmail($title, $field, $value, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::email($field, $value, $attr);
	$out .= '</div>';
	$out .= '</div>';

	return $out;
}

function mySelect($title, $field, $data, $value, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::select($field, $data, $value, $attr);
	$out .= '</div>';
	$out .= '</div>';
	return $out;
}

function myFile($title, $field, $attr){
	$out = '';
	$out .= "<div class='form-group my-file'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::file($field, $attr);
	$out .= '</div>';
	$out .= '</div>';
	return $out;
}





function myPassword($title, $field, $attr){
	$out = '';
	$out .= "<div class='form-group'>";
	$out .= "<label class='col-md-2 control-label'>{$title}</label>";
	$out .= '<div class="col-md-10">';
	$out .= Form::password($field, $attr);
	$out .= '</div>';
	$out .= '</div>';
	return $out;
}



?>
