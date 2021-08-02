<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
});

Route::get('/rate', function () {
    return view('/rate');
});


Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/forms/calendar/file', function () {
    return view('/forms/calendar/file');
});


Route::get('/forms/ipcr/edit', function () {
    return view('/forms/ipcr/edit');
});

Route::get('/dashboard', 'EmployeeController@create');

Route::get('/admin/dashboard', 'AdminController@create');

Route::get('/forms/ipcr/pre', function () {
    return view('/forms/ipcr/pre');
});

Route::get('/forms/ipcr/ipcr', function () {
    return view('/forms/ipcr/ipcr');
});

Route::get('/forms/ipcr/post', function () {
    return view('/forms/ipcr/post');
});

Route::post('/forms/ipcr/pre', 'EmployeeController@create');

Route::post('/forms/ipcr/pre', 'EmployeeController@store');

Route::post('forms/ipcr/post', 'FormController@store');

Route::post('/forms/ipcr/rate/pre', 'FormRateController@create');

Route::patch('/forms/ipcr/rate/post', 'FormRateController@store');

Route::post('/forms/ipcr/edit/pre/{id}', 'EmployeeController@edit');

Route::post('/forms/ipcr/edit/post/{id}', 'FormController@edit');

Route::post('/forms/ipcr/edit/post/submit/{id}', 'FormController@submit');

Route::patch('/forms/ipcr/edit/pre', 'EmployeeController@update');

Route::patch('/forms/ipcr/edit/post', 'FormController@update');

Route::post('/admin/forms/ipcr/{id}', 'AdminController@edit');

Route::patch('/admin/forms/ipcr', 'AdminController@update');

Route::post('/forms/ipcr/edit/destroy', 'FormController@destroy');

//PDP

Route::get('/forms/pdp/pre', function () {
    return view('/forms/pdp/pre');
});

Route::post('/forms/pdp/pre', 'PdpController@store');


Route::get('/print', 'PrintController@create');


/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('register', 'Auth\RegisterController@create');



/* MIDDLEWARES */

/* This area is used for log in syste 

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
});

Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
Route::match(['get', 'post'], '/dashboard/', 'HomeController@member');
});

Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/