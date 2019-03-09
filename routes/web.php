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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'AbsWalletController@index')->name('front');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/home', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Admin\RegisterController@register');
    Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');
});

Route::group(['prefix' => 'marchent'], function () {

    Route::get('/home', 'MarchentController@index')->name('marchent.home');
    Route::get('/login', 'Marchent\LoginController@showLoginForm')->name('marchent.login');
    Route::post('/login', 'Marchent\LoginController@login');
    Route::post('/logout', 'Marchent\LoginController@logout')->name('marchent.logout');
    Route::get('/register', 'Marchent\RegisterController@showRegistrationForm')->name('marchent.register');
    Route::post('/register', 'Marchent\RegisterController@register');
    Route::get('/password/reset', 'Marchent\ForgotPasswordController@showLinkRequestForm')->name('marchent.password.request');
    Route::post('/password/email', 'Marchent\ForgotPasswordController@sendResetLinkEmail')->name('marchent.password.email');
    Route::get('/password/reset/{token}', 'Marchent\ResetPasswordController@showResetForm')->name('marchent.password.reset');
    Route::post('/password/reset', 'Marchent\ResetPasswordController@reset')->name('marchent.password.update');
});

Route::group(['prefix' => 'customer'], function () {

    Route::get('/home', 'CustomerController@index')->name('customer.home');
    Route::get('/login', 'Customer\LoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'Customer\LoginController@login');
    Route::post('/logout', 'Customer\LoginController@logout')->name('customer.logout');
    Route::get('/register', 'Customer\RegisterController@showRegistrationForm')->name('customer.register');
    Route::post('/register', 'Customer\RegisterController@register');
    Route::get('/password/reset', 'Customer\ForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
    Route::post('/password/email', 'Customer\ForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
    Route::get('/password/reset/{token}', 'Customer\ResetPasswordController@showResetForm')->name('customer.password.reset');
    Route::post('/password/reset', 'Customer\ResetPasswordController@reset')->name('customer.password.update');
});
