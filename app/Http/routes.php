<?php

Route::auth();

Route::get('admin', 'BaseController@dashboard');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('banner/sort', 'BannerController@sortPage');
    Route::post('banner/sort', 'BannerController@sort');
    Route::resource('banner', 'BannerController');

    Route::get('content/sort', 'ContentController@sortPage');
    Route::post('content/sort', 'ContentController@sort');
    Route::resource('content', 'ContentController');

    Route::get('branch/sort', 'BranchController@sortPage');
    Route::post('branch/sort', 'BranchController@sort');
    Route::resource('branch', 'BranchController');

    Route::resource('about', 'AboutController');

//    Route::delete('gallery/{id}', 'SubCategoryController@galleryDestroy');
//    Route::post('gallery', 'SubCategoryController@galleryUpload');

});

Route::post('wysiwyg_upload', 'BaseController@wysiwygUpload');


Route::group(['namespace' => 'Web'], function () {
    Route::get('', 'WebController@index');
    Route::get('about', 'WebController@about');
    Route::resource('branch', 'BranchController');

    Route::group(['prefix' => 'content'], function () {
        Route::get('{id}', 'ContentController@index');
    });

    Route::get('{web}', function ($web) {
        return view('web.' . $web);
    });
});