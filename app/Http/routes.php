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
Route::get('/testmail',function()
{
    Mail::send('emails.test',[],function($message){
       $message->to('jpotter747@yahoo.com')->subject('laracasts Email');
    });
});


Route::group(['middleware' => ['web']], function () {
Route::get('/xy/admin/edituser/{userId}',['as' => 'edituser','uses'=>'AdminController@editUser']);
Route::post('/xy/admin/edituser/{userId}',['as' => 'edituser','uses'=>'AdminController@updateUser']);
Route::get('/xy/admin/configuser/{userId}',['as' => 'edituser','uses'=>'AdminController@configUser']);
Route::post('/xy/admin/configuser/{userId}',['as' => 'edituser','uses'=>'AdminController@updateConfigUser']);
Route::get('/xy/admin/addproduct/{productId}',['as' => 'addproduct','uses'=>'AdminController@addproduct']);
Route::get('/xy/admin/financial',['as' => 'addproduct','uses'=>'AdminController@financial']);
Route::get('/xy/admin/management',['as' => 'management','uses'=>'AdminController@management']);
Route::post('/xy/admin/management',['as' => 'search','uses'=>'AdminController@search']);
Route::get('/xy/admin/products',['as' => 'products','uses'=>'AdminController@productsStart']);
Route::get('/xy/admin/products/{productGroup}/{subGroup}',['as' => 'products','uses'=>'AdminController@products']);
Route::post('/xy/admin/products/{productGroup}/{subGroup}',['as' => 'productsearch','uses'=>'AdminController@productsearch']);

Route::get('/xy/admin/config',['as' => 'config','uses'=>'AdminController@config']);
Route::post('/xy/admin/config',['as' => 'configsearch','uses'=>'AdminController@configsearch']);
Route::get('/xy/admin/gensales',['as' => 'addproduct','uses'=>'AdminController@gensales']);

Route::get('/emailverified/{userId}/{key}',['as' => 'emailverified','uses'=>'AuthenticationController@emailVerified']);
Route::get('/login',['as' => 'login','uses'=>'AuthenticationController@login']);
Route::post('/login',['as' => 'login','uses'=>'AuthenticationController@verify']);
Route::get('/logout2',['as' => 'logout2','uses'=>'AuthenticationController@logout2']);
Route::get('/register',['as' => 'register','uses'=>'AuthenticationController@register']);
Route::post('/register',['as' => 'register2','uses'=>'AuthenticationController@finishRegistering']);
Route::post('/register2',['as' => 'register2','uses'=>'AuthenticationController@prepayment']);
Route::post('/payment',['as' => 'register2','uses'=>'AuthenticationController@payment']);
Route::get('/referred/{userId}',['as'=>'referred','uses'=>'AuthenticationController@referred']);
Route::get('/organization',['as'=>'organization','uses'=>'AuthenticationController@organization']);
Route::post('/organization',['as'=>'organization','uses'=>'AuthenticationController@organization']);
Route::get('/myaccounting',['as'=>'accounting','uses'=>'AuthenticationController@accounting']);
Route::post('/addcart',['as'=>'addcart','uses'=>'CartController@addToCart']);
Route::get('/shoppingcart',['as'=>'shoppingcart','uses'=>'CartController@viewCart']);
Route::post('/changecartquantity',['as'=>'changequantity','uses'=>'CartController@updateQuantity']);
Route::post('/purchase',['as'=>'purchase','uses'=>'CartController@purchase']);
Route::post('/checkpurchase',['as'=>'checkpurchase','uses'=>'CartController@checkPurchase']);
Route::get('/changeshippingaddress/{shippingId}',['as'=>'changeshipping','uses'=>'CartController@changeShippingAddress']);
Route::post('/changeshippingaddress',['as'=>'changeshipping','uses'=>'CartController@addShippingAddress']);

Route::get('/','PagesController@home');

Route::get('/test',['as' => 'test','uses'=>'PagesController@test']);
Route::get('/about',['as' => 'about','uses'=>'PagesController@about']);
Route::get('/accounting',['as' => 'accounting','uses'=>'PagesController@accounting']);
Route::get('/products',['as' => 'products','uses'=>'PagesController@products']);
Route::get('/product/{productId}',['as' => 'product','uses'=>'PagesController@product']);
Route::get('/food',['as' => 'food','uses'=>'PagesController@food']);
Route::get('/autoship',['as' => 'autoship','uses'=>'PagesController@autoship']);
Route::get('/books',['as' => 'books','uses'=>'PagesController@books']);
Route::post('/books',['as' => 'books','uses'=>'PagesController@books']);

Route::get('/energy',['as' => 'energy','uses'=>'PagesController@energy']);
Route::get('/recycling',['as' => 'recycling','uses'=>'PagesController@recycling']);
Route::get('/benefits',['as' => 'about','uses'=>'PagesController@benefits']);
Route::get('/businesscards',['as' => 'cards','uses'=>'PagesController@businesscards']);
Route::get('/camping',['as' => 'camping','uses'=>'PagesController@camping']);
Route::get('/cooking',['as' => 'cooking','uses'=>'PagesController@cooking']);
Route::get('/comparison',['as' => 'comparison','uses'=>'PagesController@comparison']);
Route::get('/debitcards',['as' => 'debit','uses'=>'PagesController@debitcards']);
Route::get('/experiences',['as' => 'debit','uses'=>'PagesController@experiences']);
Route::get('/health',['as' => 'health','uses'=>'PagesController@health']);
Route::get('/training',['as' => 'training','uses'=>'PagesController@training']);
Route::get('/transfers',['as' => 'transfers','uses'=>'PagesController@transfers']);
Route::get('/people',['as' => 'people','uses'=>'PagesController@people']);
Route::get('/founders',['as' => 'founders','uses'=>'PagesController@founders']);
Route::get('/limitations',['as' => 'limitations','uses'=>'PagesController@limitations']);
Route::get('/members',['as' => 'members','uses'=>'PagesController@members']);
Route::get('/membercost',['as' => 'membercost','uses'=>'PagesController@membercost']);
Route::get('/charities',['as' => 'charities','uses'=>'PagesController@charities']);
Route::get('/groups',['as' => 'groups','uses'=>'PagesController@groups']);
Route::get('/house',['as' => 'house','uses'=>'PagesController@house']);
Route::get('/potential',['as' => 'potential','uses'=>'PagesController@potential']);
Route::get('/purpose',['as' => 'purpose','uses'=>'PagesController@purpose']);
Route::get('/physically',['as' => 'physically','uses'=>'PagesController@physically']);
Route::get('/requirements',['as' => 'requirements','uses'=>'PagesController@requirements']);
Route::get('/referrallinks',['as' => 'requirements','uses'=>'PagesController@referrallinks']);
Route::get('/emotionally',['as' => 'emotionally','uses'=>'PagesController@emotionally']);
Route::get('/selection',['as' => 'selection','uses'=>'PagesController@selection']);
Route::get('/selfreliance',['as' => 'selfreliance','uses'=>'PagesController@selfreliance']);
Route::get('/spiritually',['as' => 'spiritually','uses'=>'PagesController@spiritually']);
Route::get('/economically',['as' => 'economically','uses'=>'PagesController@economically']);
Route::get('/plans',['as' => 'plans','uses'=>'PagesController@plans']);
Route::get('/discount',['as' => 'discount','uses'=>'PagesController@discount']);
Route::get('/referral',['as' => 'referral','uses'=>'PagesController@referral']);
Route::get('/donations',['as' => 'donations','uses'=>'PagesController@donations']);
Route::get('/contact',['as' => 'contact','uses'=>'PagesController@contact']);
Route::get('/water',['as' => 'water','uses'=>'PagesController@water']);
Route::get('/homepage/{userId}',['as' => 'homepage','uses'=>'PagesController@homepage']);
Route::get('/money/{userId}',['as' => 'money','uses'=>'PagesController@money']);
Route::get('/traininglinks',['as' => 'traininglinks','uses'=>'PagesController@traininglinks']);
Route::get('/linksfood',['as' => 'linksfood','uses'=>'PagesController@linksfood']);
Route::get('/linkswater',['as' => 'linkswater','uses'=>'PagesController@linkswater']);
Route::get('/linksenergy',['as' => 'linksenergy','uses'=>'PagesController@linksenergy']);
Route::get('/linksrecycling',['as' => 'linksrecycling','uses'=>'PagesController@linksrecycling']);
Route::get('/linkscamping',['as' => 'linkscamping','uses'=>'PagesController@linkscamping']);
Route::get('/linkscooking',['as' => 'linkscooking','uses'=>'PagesController@linkscooking']);
Route::get('/linkshealth',['as' => 'linkshealth','uses'=>'PagesController@linkshealth']);
Route::get('/linkshouse',['as' => 'linkshouse','uses'=>'PagesController@linkshouse']);
Route::get('/intro',['as'=>'introduction','uses'=>'PagesController@introduction']);
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

