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

Route::get('/','PagesController@home');
Route::get('/test',array('as' => 'test','uses'=>'PagesController@test'));
Route::get('/about',array('as' => 'about','uses'=>'PagesController@about'));
Route::get('/products',array('as' => 'products','uses'=>'PagesController@products'));
Route::get('/food',array('as' => 'food','uses'=>'PagesController@food'));
Route::get('/water',array('as' => 'water','uses'=>'PagesController@water'));
Route::get('/energy',array('as' => 'energy','uses'=>'PagesController@energy'));
Route::get('/recycling',array('as' => 'recycling','uses'=>'PagesController@recycling'));
Route::get('/camping',array('as' => 'camping','uses'=>'PagesController@camping'));
Route::get('/cooking',array('as' => 'cooking','uses'=>'PagesController@cooking'));
Route::get('/health',array('as' => 'health','uses'=>'PagesController@health'));
Route::get('/books',array('as' => 'books','uses'=>'PagesController@books'));
Route::get('/training',array('as' => 'training','uses'=>'PagesController@training'));
Route::get('/people',array('as' => 'people','uses'=>'PagesController@people'));
Route::get('/founders',array('as' => 'founders','uses'=>'PagesController@founders'));
Route::get('/members',array('as' => 'members','uses'=>'PagesController@members'));
Route::get('/charities',array('as' => 'charities','uses'=>'PagesController@charities'));
Route::get('/groups',array('as' => 'groups','uses'=>'PagesController@groups'));
ROute::get('/purpose',array('as' => 'purpose','uses'=>'PagesController@purpose'));
Route::get('/physically',array('as' => 'physically','uses'=>'PagesController@physically'));
Route::get('/emotionally',array('as' => 'emotionally','uses'=>'PagesController@emotionally'));
Route::get('/spiritually',array('as' => 'spiritually','uses'=>'PagesController@spiritually'));
Route::get('/economically',array('as' => 'economically','uses'=>'PagesController@economically'));
Route::get('/plans',array('as' => 'plans','uses'=>'PagesController@plans'));
Route::get('/discount',array('as' => 'discount','uses'=>'PagesController@discount'));
Route::get('/referral',array('as' => 'referral','uses'=>'PagesController@referral'));
Route::get('/donations',array('as' => 'donations','uses'=>'PagesController@donations'));
Route::get('/contact',array('as' => 'contact','uses'=>'PagesController@contact'));
Route::get('/homepage/{userId}',array('as' => 'homepage','uses'=>'PagesController@homepage'));
Route::get('/money/{userId}',array('as' => 'money','uses'=>'PagesController@money'));
Route::get('/logout/',array('as' => 'logout','uses'=>'PagesController@logout'));


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


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => ['web']], function () {
    //
});
