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
        Route::get('xoa/{id}', 'CongvandenController@getDestroy');
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
        // Cơ quan: pages/danhmuc/coquan/coquan_list

        Route::group(['prefix' => 'coquan'], function () {
            Route::get('coquan_list', 'CoQuanController@getCoQuan');

            Route::get('coquan_add', 'CoQuanController@getCoQuan_Add');
            Route::post('coquan_add', 'CoQuanController@postCoQuan_Add');

            Route::get('coquan_edit/{id}', 'CoQuanController@getCoQuan_Edit');
            Route::post('coquan_edit/{id}', 'CoQuanController@postCoQuan_Edit');

            Route::get('coquan_del/{id}','CoQuanController@getCoQuan_Del');
        });

        // Phòng ban: pages/danhmuc/phongban/phongban_list

        Route::group(['prefix' => 'phongban'], function () {
            Route::get('phongban_list', 'PhongBanController@getPhongBan');

            Route::get('phongban_add', 'PhongBanController@getPhongBan_Add');
            Route::post('phongban_add', 'PhongBanController@postPhongBan_Add');

            Route::get('phongban_edit/{id}', 'PhongBanController@getPhongBan_Edit');
            Route::post('phongban_edit/{id}', 'PhongBanController@postPhongBan_Edit');

            Route::get('phongban_del/{id}','PhongBanController@getPhongBan_Del');
        });
        //-----------------------------------------------------------
        // Người ký: pages/danhmuc/nguoiky/nguoiky_list

        Route::group(['prefix' => 'nguoiky'], function () {

            Route::get('nguoiky_list', 'NguoiKyController@getNguoiKy');

            Route::get('nguoiky_add', 'NguoiKyController@getNguoiKy_Add');
            Route::post('nguoiky_add', 'NguoiKyController@postNguoiKy_Add');

            Route::get('nguoiky_edit/{id}', 'NguoiKyController@getNguoiKy_Edit');
            Route::post('nguoiky_edit/{id}', 'NguoiKyController@postNguoiKy_Edit');

            Route::get('nguoiky_del/{id}','NguoiKyController@getNguoiKy_Del');
        });

        //-----------------------------------------------------------
        // Người ký: pages/danhmuc/theloai/theloai_list

        Route::group(['prefix' => 'theloaicv'], function () {

            Route::get('theloaicv_list', 'TheLoaiController@getTheLoai');

            Route::get('theloaicv_add', 'TheLoaiController@getTheLoai_Add');
            Route::post('theloaicv_add', 'TheLoaiController@postTheLoai_Add');

            Route::get('theloaicv_edit/{id}', 'TheLoaiController@getTheLoai_Edit');
            Route::post('theloaicv_edit/{id}', 'TheLoaiController@postTheLoai_Edit');

            Route::get('theloaicv_del/{id}','TheLoaiController@getTheLoai_Del');
        });
        //-----------------------------------------------------------
        // Lĩnh vực: pages/danhmuc/linhvuc/linhvuc_list

        Route::group(['prefix' => 'linhvuc'], function () {

            Route::get('linhvuc_list', 'LinhVucController@getLinhVuc');

            Route::get('linhvuc_add', 'LinhVucController@getLinhVuc_Add');
            Route::post('linhvuc_add', 'LinhVucController@postLinhVuc_Add');

            Route::get('linhvuc_edit/{id}', 'LinhVucController@getLinhVuc_Edit');
            Route::post('linhvuc_edit/{id}', 'LinhVucController@postLinhVuc_Edit');

            Route::get('linhvuc_del/{id}','LinhVucController@getLinhVuc_Del');
        });

    });
    //-------------------- end of danh mục

    Route::group(['prefix' => 'congvandi'], function () {
        Route::get('hoten', function () {
            echo "Tên của bạn là: ";
        });
        Route::get('danhsach', 'CongvandiController@pages_index');
        Route::get('edit/{id}', 'CongvandiController@getEdit');
        Route::post('edit/{id}', 'CongvandiController@postEdit');
        Route::get('destroy/{id}', 'CongvandiController@getDestroy');
        Route::get('them', 'CongvandiController@getThem');
        Route::post('them', 'CongvandiController@postThem');
    });
});
