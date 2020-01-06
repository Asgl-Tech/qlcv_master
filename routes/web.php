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
        // độ khẩn
        Route::group(['prefix' => 'dokhan'], function () {
            Route::get('dokhan_list', 'DoKhanController@getDoKhan');

            Route::get('dokhan_add', 'DoKhanController@getDoKhan_Add');
            Route::post('dokhan_add', 'DoKhanController@postDoKhan_Add');

            Route::get('dokhan_edit/{id}', 'DoKhanController@getDoKhan_Edit');
            Route::post('dokhan_edit/{id}', 'DoKhanController@postDoKhan_Edit');

            Route::get('dokhan_del/{id}','DoKhanController@getDoKhan_Del');
        });
        // localhost:8080/qlcv/public/pages/danhmuc/domat/domat_list
        // độ mật
        Route::group(['prefix' => 'domat'], function () {
            Route::get('domat_list', 'DoMatController@getDoMat');

            Route::get('domat_add', 'DoMatController@getDoMat_Add');
            Route::post('domat_add', 'DoMatController@postDoMat_Add');

            Route::get('domat_edit/{id}', 'DoMatController@getDoMat_Edit');
            Route::post('domat_edit/{id}', 'DoMatController@postDoMat_Edit');

            Route::get('domat_del/{id}','DoMatController@getDoMat_Del');
        });
        // localhost:8080/qlcv/public/pages/danhmuc/loaicv/loaicv_list
        // Loại công văn: pages/danhmuc/loaicv/loaicv_list
        Route::group(['prefix' => 'loaicv'], function () {
            Route::get('loaicv_list', 'LoaiCongVanController@getLoaiCv');

            Route::get('loaicv_add', 'LoaiCongVanController@getLoaiCv_Add');
            Route::post('loaicv_add', 'LoaiCongVanController@postLoaiCv_Add');

            Route::get('loaicv_edit/{id}', 'LoaiCongVanController@getLoaiCv_Edit');
            Route::post('loaicv_edit/{id}', 'LoaiCongVanController@postLoaiCv_Edit');

            Route::get('loaicv_del/{id}','LoaiCongVanController@getLoaiCv_Del');
        });
        //-----------------------------------------------------------
        Route::group(['prefix' => 'coquan'], function () {
            Route::get('coquan_list', 'CoQuanController@getCoQuan');
            Route::post('coquan_edit', 'CoQuanController@postCoQuan');
        });
        Route::group(['prefix' => 'linhvuc'], function () {
            Route::get('linhvuc_list', 'LinhVucController@getLinhVuc');
            Route::post('linhvuc_edit', 'LinhVucController@postLinhVuc');
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
