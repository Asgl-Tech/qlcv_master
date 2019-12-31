<?php
Route::get('dangnhap', 'LoginController@getDangNhap');
Route::post('dangnhap', 'LoginController@postDangNhap');
Route::get('dangxuat', 'LoginController@dangxuat');
//Tân controller congvanden
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
            Route::post('dokhan_edit', 'DoKhanController@postDoKhan');
        });
        Route::group(['prefix' => 'domat'], function () {
            Route::get('domat_list', 'DoMatController@getDoMat');
            Route::post('domat_edit', 'DoMatController@postDoMat');
        });
        Route::group(['prefix' => 'coquan'], function () {
            Route::get('coquan_list', 'CoQuanController@getCoQuan');
            Route::post('coquan_edit', 'CoQuanController@postCoQuan');
        });
        Route::group(['prefix' => 'linhvuc'], function () {
            Route::get('linhvuc_list', 'LinhVucController@getLinhVuc');
            Route::post('linhvuc_edit', 'LinhVucController@postLinhVuc');
        });
        Route::group(['prefix' => 'loaicv'], function () {
            Route::get('loaicv_list', 'LoaiCvController@getLoaiCv');
            Route::post('loaicv_edit', 'LoaiCvController@postLoaiCv');
        });
        Route::group(['prefix' => 'nguoiky'], function () {
            Route::get('nguoiky_list', 'NguoiKyController@getNguoiKy');
            Route::post('nguoiky_edit', 'NguoiKyController@postNguoiKy');
        });
        Route::group(['prefix' => 'phongban'], function () {
            Route::get('phongban_list', 'PhongBanController@getPhongBan');
            Route::post('phongban_edit', 'PhongBanController@postPhongBan');
        });
        Route::group(['prefix' => 'theloaicv'], function () {
            Route::get('theloaicv_list', 'TheLoaiCvController@getTheLoaiCv');
            Route::post('theloaicv_edit', 'TheLoaiCvController@postTheLoaiCv');
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
