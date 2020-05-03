<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'admincontroller@index')->name('home');
Route::get('/res', 'TestController@index');
Route::get('/change-password', 'Auth\ChangePasswordController@index' )->name('password.change');
Route::post('/change-password', 'Auth\ChangePasswordController@changePassword' )->name('password.edit');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//create for redirect to admin panel using middleware (we have changes in AdminMiddleware,kernel,LoginController files //here auth and admin indicate to folder)
Route::group(['middleware'  => ['auth','author']], function() {
    // you can use "/admin" instead of "/dashboard"
    Route::get('/dashboard', function () {
        return view('author.dashboard');
    });
    // below is used for adding the users.
    Route::get('/role-register','Author\DashboardController@registered');
    //below route for edit the users detail and update.
    Route::get('/role-edit/{id}','Author\DashboardController@registeredit');
    //update button route
    Route::put('/role-register-update/{id}','Author\DashboardController@registerupdate');
    //delete route
    Route::delete('/role-delete/{id}','Author\DashboardController@registerdelete');

});

//create for redirect to admin panel using middleware (we have changes in AdminMiddleware,kernel,LoginController files //here auth and admin indicate to folder)
Route::group(['middleware'  => ['auth','admin']], function() {
    // you can use "/admin" instead of "/dashboard"
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    // below is used for adding the users.
    Route::get('/role-register','Admin\DashboardController@registered');
    //below route for edit the users detail and update.
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    //update button route
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    //delete route
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

});

Route::get('about-us', 'FrontendController@aboutus');
Route::get('contact-us', 'FrontendController@contactus');
Route::get('products', 'FrontendController@products');
Route::get('football', 'FrontendController@football');
Route::get('tennis', 'FrontendController@tennis');
Route::get('world', 'FrontendController@world');









/*Route::group(['as'=>'admin.','prefix'=> 'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']],
    function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    }
);

Route::group(['as'=>'author.', 'prefix'=> 'author', 'namespace'=>'Author', 'middleware'=>['auth','author']],
    function(){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    }
);*/
