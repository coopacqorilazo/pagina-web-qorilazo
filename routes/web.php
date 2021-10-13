<?php

use Illuminate\Support\Facades\Route;
use App\User;

Route::get('/', function () {
    return view('public.index');
});
/*Route::get('admin/normative/visor', function () {
    return view('admin.normative.visor');
});
/*Route::get('/admin', function () {
    return view('admin.index');
});*/



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::resource('admin/normative','AdminNormativeController')->names('admin.normative');
Route::get('admin/normative/file/{file}', 'AdminNormativeController@showFile')->name('admin.normative.showFile');
Route::get('admin/normative/file/view/{file}', 'AdminNormativeController@viewpdf')->name('admin.normative.viewpdf');
//roles
Route::resource('admin/roles','AdminRolesController')->names('admin.roles');
//Users
Route::resource('admin/users','AdminUsersController')->names('admin.users');




