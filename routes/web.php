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
 //   return view('page.home');
//});
Route::get('/', 'HomeController@homepage');

Route::get('/About', function () {
    return view('page.about');
});


Route::get('/register', function () {
    return view('page.register');
});

Route::get('/RetrivePassword', function () {
    return view('page.retrive');
});

Route::get('/Services', function () {
    return view('page.services');
});


Route::get('/Works', function () {
    return view('page.works');
});

Route::get('/OrderNow', function () {
    return view('page.order');
});

Route::get('/Contact', function () {
    return view('page.contact');
});


Route::get('/Details', function () {
    return view('page.details');
});



//Dashboard

Auth::routes();

Route::get('/Dashboard', 'DashboardController@index')->name('home');

Route::get('/Dashboard/Login', 'Auth\LoginController@index');


//Slider Image Upload
Route::resource('/Dashboard/Slider', 'SliderController');

Route::post('/Dashboard/Slider', 'SliderController@store');

Route::delete('/Dashboard/Slider/{id}', 'SliderController@destroy');

//Dashboard About  Section
Route::resource('/Dashboard/About', 'AboutController');

Route::post('/Dashboard/About', 'AboutController@store');

Route::delete('/Dashboard/About/{id}', 'AboutController@destroy');

//Dashboard About  Section
Route::resource('/Dashboard/Mission', 'MissionController');

Route::post('/Dashboard/Mission', 'MissionController@store');

Route::delete('/Dashboard/Mission/{id}', 'MissionController@destroy');

//Dashboard Offered Service  Section
Route::resource('/Dashboard/OfferedServices', 'OfferedServicesController');

Route::post('/Dashboard/OfferedServices', 'OfferedServicesController@store');

Route::delete('/Dashboard/OfferedServices/{id}', 'OfferedServicesController@destroy');

//Dashboard Featured Service  Section
Route::resource('/Dashboard/FeaturedServices', 'FeaturedServicesController');

Route::post('/Dashboard/FeaturedServices', 'FeaturedServicesController@store');

Route::delete('/Dashboard/FeaturedServices/{id}', 'FeaturedServicesController@destroy');

//Dashboard Work Section
// Route::resource('/Dashboard/Works', 'WorksController');

// Route::post('/Dashboard/Works', 'WorksController@store');

// Route::delete('/Dashboard/Works/{id}', 'WorksController@destroy');
Route::resource('/Dashboard/Portfolio', 'PortfolioController');

Route::resource('/Dashboard/Catagory', 'CatagoryController');
Route::resource('/Dashboard/Image', 'ImageController');

//Dashboard Team Section
Route::resource('/Dashboard/Team', 'TeamController');

Route::post('/Dashboard/Team', 'TeamController@store');

Route::delete('/Dashboard/Team/{id}', 'TeamController@destroy');

//Dashboard Profile Section
Route::resource('/Dashboard/EditProfile', 'ProfileController');

//Dashboard Email Section
Route::resource('/Dashboard/EditEmail', 'EmailController');

//Dashboard Password Section
Route::resource('/Dashboard/EditPassword', 'PasswordController');

//Dashboard Register Section
Route::resource('/Dashboard/Admin', 'RegisterController');

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');


