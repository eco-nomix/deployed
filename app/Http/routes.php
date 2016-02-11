<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/jaylogs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');



Route::group(['middleware' => ['web']], function () {



Route::get('/login',['as' => 'login','uses'=>'AuthenticationController@login']);
Route::post('/login',['as' => 'login','uses'=>'AuthenticationController@verify']);
Route::get('/logout2',['as' => 'logout2','uses'=>'AuthenticationController@logout2']);
Route::get('/register',['as' => 'register','uses'=>'AuthenticationController@register']);



Route::get('/','PagesController@home');

Route::get('/test',['as' => 'test','uses'=>'PagesController@test']);
Route::get('/about',['as' => 'about','uses'=>'PagesController@about']);
Route::get('/products',['as' => 'products','uses'=>'PagesController@products']);
Route::get('/food',['as' => 'food','uses'=>'PagesController@food']);
Route::get('/water',['as' => 'water','uses'=>'PagesController@water']);
Route::get('/energy',['as' => 'energy','uses'=>'PagesController@energy']);
Route::get('/recycling',['as' => 'recycling','uses'=>'PagesController@recycling']);
Route::get('/benefits',['as' => 'about','uses'=>'PagesController@benefits']);
Route::get('/camping',['as' => 'camping','uses'=>'PagesController@camping']);
Route::get('/cooking',['as' => 'cooking','uses'=>'PagesController@cooking']);
Route::get('/health',['as' => 'health','uses'=>'PagesController@health']);
Route::get('/books',['as' => 'books','uses'=>'PagesController@books']);
Route::get('/training',['as' => 'training','uses'=>'PagesController@training']);
Route::get('/people',['as' => 'people','uses'=>'PagesController@people']);
Route::get('/founders',['as' => 'founders','uses'=>'PagesController@founders']);
Route::get('/members',['as' => 'members','uses'=>'PagesController@members']);
Route::get('/charities',['as' => 'charities','uses'=>'PagesController@charities']);
Route::get('/groups',['as' => 'groups','uses'=>'PagesController@groups']);
ROute::get('/purpose',['as' => 'purpose','uses'=>'PagesController@purpose']);
Route::get('/physically',['as' => 'physically','uses'=>'PagesController@physically']);
Route::get('/emotionally',['as' => 'emotionally','uses'=>'PagesController@emotionally']);
Route::get('/spiritually',['as' => 'spiritually','uses'=>'PagesController@spiritually']);
Route::get('/economically',['as' => 'economically','uses'=>'PagesController@economically']);
Route::get('/plans',['as' => 'plans','uses'=>'PagesController@plans']);
Route::get('/discount',['as' => 'discount','uses'=>'PagesController@discount']);
Route::get('/referral',['as' => 'referral','uses'=>'PagesController@referral']);
Route::get('/donations',['as' => 'donations','uses'=>'PagesController@donations']);
Route::get('/contact',['as' => 'contact','uses'=>'PagesController@contact']);
Route::get('/homepage/{userId}',['as' => 'homepage','uses'=>'PagesController@homepage']);
Route::get('/money/{userId}',['as' => 'money','uses'=>'PagesController@money']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*
Route::controllers([
    '' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
*/

});

