<?php
Route::get('dangnhap', 'LoginController@getDangNhap');
Route::post('dangnhap', 'LoginController@postDangNhap');
Route::get('dangxuat', 'LoginController@dangxuat');
Route::group(['prefix' => 'pages', 'middleware' => 'MyMiddleware'], function () {
    Route::group(['prefix' => 'congvanden'], function () {
        Route::get('danhsach', 'CongvandenController@pages_index');
        Route::get('edit/{id}', 'CongvandenController@getEdit');
        Route::post('edit/{id}', 'CongvandenController@postEdit');
        Route::get('destroy/{id}', 'CongvandenController@getDestroy');
        Route::get('them', 'CongvandenController@getThem');
        Route::post('them', 'CongvandenController@postThem');
    });
    // hello các em, phần route danh mục anh Huy nhé
    // localhost:8080/qlcv/public/pages/danhmuc/dokhan/dokhan_list
    Route::group(['prefix' => 'danhmuc'], function () {
        Route::group(['prefix' => 'dokhan'], function () {
            Route::get('dokhan_list', 'DoKhanController@getDoKhan');
            Route::post('dokhan_edit', 'DoKhanController@posDoKhan');
        });
        Route::group(['prefix' => 'domat'], function () {
            Route::get('domat_list', 'DoMatController@getDoMat');
            Route::post('domat_edit', 'DoMatController@posDoMat');
        });
});
    // tung add controler cong van di
    Route::group(['prefix'=>'pages','middleware'=> 'MyMiddleware'],function() {
        Route::group(['prefix' => 'congvandi'], function () {
            Route::get('danhsach', 'CongvandiController@pages_index');
            Route::get('edit/{id}', 'CongvandiController@getEdit');
            Route::post('edit/{id}', 'CongvandiController@postEdit');
            Route::get('destroy/{id}', 'CongvandiController@getDestroy');
            Route::get('them', 'CongvandiController@getThem');
            Route::post('them', 'CongvandiController@postThem');
        });
    });
});
