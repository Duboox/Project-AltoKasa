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

// Website
Route::get('/', 'Web\WebController@index');
Route::get('search', 'Web\WebController@search')->name('search');
Route::get('propierty/{slug}', 'Web\WebController@read_more')->name('read.more');
Route::post('select-dynamic', 'Web\WebController@select_dynamic');
Route::post('contact', 'Web\WebController@contact');
Route::get('read_more_propierty/{id}', 'Web\WebController@read_more_propierty');
Route::view('about', 'web.about')->name('about');
Route::get('bienes', 'Web\WebController@bienes')->name('bienes');
Route::view('information', 'web.information')->name('information');
Route::view('inversiones', 'web.inversiones')->name('inversiones');
Route::view('constructora', 'web.constructora')->name('constructora');
Route::get('contact/{id}', 'Web\WebController@contactMail')->name('contact');
// querys
Route::get('category/{type}', 'Web\WebController@queryPage')->name('query');


// Authentication
Auth::routes();

// Redirect to Home Dashboard 
Route::get('dashboard', function () {
    return redirect()->route('home');
});

// Dashboard
Route::prefix('dashboard')->middleware(['auth', 'DisablePreventBack'])->group(function() {
    Route::view('home', 'dashboard.home')->name('home');

	// Roles
    Route::resource('permissions', 'Admin\PermissionController');
	
	Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');
	
	Route::get('roles/create', 'Admin\RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');
	
	Route::post('roles/store', 'Admin\RoleController@store')->name('roles.store')
		->middleware('permission:roles.store');
	
	Route::get('roles/{role}', 'Admin\RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');
	
	Route::get('roles/{role}/edit', 'Admin\RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');
	
	Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');
	
	Route::delete('roles/{role}', 'Admin\RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	// Users
	Route::get('users', 'Admin\UserController@index')->name('users.index')
		->middleware('permission:users.index');
	
	Route::put('users/{user}', 'Admin\UserController@update')->name('users.update')
		->middleware('permission:users.edit');
	
	Route::get('users/{user}', 'Admin\UserController@show')->name('users.show')
		->middleware('permission:users.show');
	
	Route::delete('users/{user}', 'Admin\UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');
	
	Route::get('users/{user}/edit', 'Admin\UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');
	
	Route::post('users/confirmed/{id}', 'Admin\UserController@confirmed')->name('users.confirmed')
		->middleware('permission:users.confirmed');

	// Perfil
	Route::get('perfil', 'Admin\DashboardController@index')->name('perfil.index');
	Route::get('perfil/{id}', 'Admin\DashboardController@edit')->name('perfil.edit');
	Route::put('perfil/{id}', 'Admin\DashboardController@update')->name('perfil.update');

	// Propierty
	Route::resource('owner', 'Admin\PropiertyOwnerController');
	Route::resource('propierty', 'Admin\PropiertyController');
	Route::resource('city', 'Admin\CityController');
	Route::resource('area', 'Admin\AreaController');
	Route::resource('type-operation', 'Admin\TypeOperationController');
	Route::resource('type-propierty', 'Admin\TypePropertyController');
	
	Route::get('photos/create/{id_propierty}', 'Admin\PhotoController@create')->name('photo.create');
	Route::post('photos/store/{id_propierty}', 'Admin\PhotoController@store')->name('photo.store');
	Route::resource('photos', 'Admin\PhotoController');
	
	Route::resource('tags', 'Admin\TagController');
	
	// query owner
	Route::post('query-owner/{id_owner}', 'Admin\DashboardController@query_owner');
	Route::post('owner-register', 'Admin\PropiertyOwnerController@store');

	// Google Maps
	Route::get('google-maps', 'Admin\DashboardController@google_maps')
		->name('google.maps');
	Route::get('google-maps/{id_propierty}', 'Admin\DashboardController@google_maps_find')
		->name('google.maps.find');

	// Client
	Route::resource('client', 'Admin\ClientController');
	Route::resource('notification', 'Admin\NotificationController');

	// Website
	Route::resource('gallery', 'Admin\GalleryController');
	Route::resource('social', 'Admin\SocialController');
});