<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear', function(){
    //session()->flush();
    \Artisan::call('cache:clear');
    // \Artisan::call('route:cache');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    echo "session cleared";
});

Route::get('/', 'WebController@home');

Route::post('investor/store', 'WebController@investor_store');





// // SSLCOMMERZ Start
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

// Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

// Route::post('/success', [SslCommerzPaymentController::class, 'success']);
// Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
// Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);


// Route::post('/access_payment_success', [SslCommerzPaymentController::class, 'success']);
// Route::post('/access_payment_fail', [SslCommerzPaymentController::class, 'fail']);
// Route::post('/access_payment_cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::get('/page/facilities', 'WebController@facilities');
Route::get('/page/gallery', 'WebController@gallery');
Route::get('/page/explore', 'WebController@explore');
Route::get('/page/about_us', 'WebController@about_us');

Route::get('/page/contact', 'WebController@contact');
Route::post('/page/contact', 'WebController@contact_store');

Route::get('/page/investor', 'WebController@investor');
Route::get('/page/investor_vue', 'WebController@investor_vue');
// Route::post('/page/investor', 'WebController@investor_store');

Route::get('/page/important_links', 'WebController@important_links');


Route::get('/page/videos', 'WebController@videos');

/** PAGE DYNAMIC **/
Route::get('/pages/{page}', 'WebController@page_show');




Route::get('/blogs', 'WebController@blogs');
Route::get('/blog/{id}', 'WebController@blog_show');

Route::get('/member/{id}', 'WebController@member_show');



Route::get('/courses', 'WebController@courses');


Route::get('student/register', 'WebController@student_register');
Route::post('student/register', 'WebController@student_register_store');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::get('profile', 'UserController@editProfile');
    Route::post('update-profile', 'UserController@updateProfile');
});
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('/delete_image/{model}/{id}/{field}/', 'SettingController@delete_image_by_table_id_field');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {

    // Settings

    Route::get('/settings', 'AdminSettingController@index')->name('settings');
    Route::post('/settings', 'AdminSettingController@store')->name('settings.store');

    Route::get('/menus/', 'AdminMenuController@index');
    Route::get('/menus/create', 'AdminMenuController@create');
    Route::get('/menus/{id}', 'AdminMenuController@show');
    Route::get('/menus/{id}/edit', 'AdminMenuController@edit');

    Route::post('menus', 'AdminMenuController@store');
    Route::put('menus/{id}', 'AdminMenuController@update');
    Route::get('menus/{id}/delete', 'AdminMenuController@destroy');


    Route::post('/save_menu_settings/{menu_id}', 'AdminMenuController@store_menu_settings');
    Route::get('/fetch_menu_settings/{menu_id}', 'AdminMenuController@fetch_menu_settings');

    Route::get('/fetch_category/{category_id}', 'AdminBlogCategoryController@fetch_category');


    // Page

    Route::get('pages/{id}/edit', 'AdminPageController@edit');
    Route::get('pages', 'AdminPageController@index');
    Route::get('pages/search', 'AdminPageController@search');
    Route::get('pages/create', 'AdminPageController@create');
    Route::get('pages/{id}', 'AdminPageController@show');
    Route::post('pages', 'AdminPageController@store');
    Route::put('pages/{id}', 'AdminPageController@update');
    Route::get('pages/{id}/delete', 'AdminPageController@destroy');


    // Page Categories

    Route::get('page/categories/{id}/edit', 'AdminPageCategoryController@edit');
    Route::get('page/categories/', 'AdminPageCategoryController@index');
    Route::get('page/categories/search', 'AdminPageCategoryController@search');
    Route::get('page/categories/create', 'AdminPageCategoryController@create');
    Route::get('page/categories/{id}', 'AdminPageCategoryController@show');
    Route::post('page/categories/', 'AdminPageCategoryController@store');
    Route::put('page/categories/{id}', 'AdminPageCategoryController@update');
    Route::get('page/categories/{id}/delete', 'AdminPageCategoryController@destroy');



    Route::resource('users', 'UserController', ["as" => 'admin']);
    Route::resource('roles', 'RoleController', ["as" => 'admin']);
    Route::resource('permissions', 'PermissionController', ["as" => 'admin']);
    Route::resource('countries', 'CountryController', ["as" => 'admin']);

});





Route::group(['prefix' => 'admin'], function () {
    Route::resource('liveClasses', 'LiveClassController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('liveClasses', 'LiveClassController', ["as" => 'admin']);
});






Route::group(['prefix' => 'admin'], function () {
    Route::resource('transactions', 'TransactionController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('packages', 'PackageController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('sliders', 'SliderController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('blogs', 'BlogController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('partners', 'PartnerController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('testimonials', 'TestimonialController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('faqs', 'FaqController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('contacts', 'ContactController', ["as" => 'admin']);
});




Route::group(['prefix' => 'admin'], function () {
    Route::resource('galleries', 'GalleryController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('members', 'MemberController', ["as" => 'admin']);
});
























Route::group(['prefix' => 'admin'], function () {
    Route::resource('investors', 'InvestorController', ["as" => 'admin']);
});
