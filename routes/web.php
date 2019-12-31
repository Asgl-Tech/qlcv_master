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

//  Route::get('/', function () {
//     return view('/login');
// });
// Auth::routes();

Route::get('/', 'LoginController@getDangNhap');
Route::post('dangnhap', 'LoginController@postDangNhap');
Route::get('dangxuat','LoginController@dangxuat');
// Route::get('pages','PagesController@pages_index');//->middleware('MyMiddleware');



// Route::get ('password/lost','ForgotPasswordController@forgotPassword');

// Auth::routes();
// Route::get ('dashboard', 'DashboardController@index');
// Route::get ('changepassword', 'UserController@changepassword');
// Route::post('updatepassword','UserController@updatePassword');
// Route::get ('profile', 'UserController@profile');
// Route::resource ('pages', 'PagesController');

// Route::get ('congvanden', 'CongvandenController@getDanhSach');


// Route::post ('update/{user_id}', 'UserController@updateprofile');
// Route::post('changePassword/{user_id}','UserController@updatePassword')->name('changePassword');
// Route::get ('user/profile', 'UserController@profile');
// Route::get ('main/logout', 'MainController@logout');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'pages','middleware'=> 'MyMiddleware'],function() {
    Route::group(['prefix' => 'congvanden'], function () {
        Route::get('danhsach', 'PagesController@pages_index');
        Route::get('edit/{id}', 'PagesController@getEdit');
        Route::post('edit/{id}', 'PagesController@postEdit');
        Route::get('destroy/{id}', 'PagesController@getDestroy');
        Route::get('them', 'PagesController@getThem');
        Route::post('them', 'PagesController@postThem');

    });
});
Route::group(['prefix'=>'pages','middleware'=> 'MyMiddleware'],function(){
    Route::group(['prefix'=>'congvandi'],function(){
        Route::get('danhsach','CongvandiController@pages_index');
        Route::get('edit/{id}','CongvandiController@getEdit');
        Route::post('edit/{id}','CongvandiController@postEdit');
        Route::get('destroy/{id}','CongvandiController@getDestroy');
        Route::get('them','CongvandiController@getThem');
        Route::post('them','CongvandiController@postThem');

    });

});