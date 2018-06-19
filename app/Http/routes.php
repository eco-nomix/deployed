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



Route::get('/sitemap', function()
{
    $file = public_path(). "/download/sitemap.xml";  // <- Replace with the path to your .xml file
    if (file_exists($file)) {
        $content = file_get_contents($file);
       return Response::make($content, 200, array('content-type'=>'application/xml'));
    }
});
Route::get('/sitemap.xml', function()
{
    $file = public_path(). "/download/sitemap.xml";  // <- Replace with the path to your .xml file
    if (file_exists($file)) {
        $content = file_get_contents($file);
        return Response::make($content, 200, array('content-type'=>'application/xml'));
    }
});
Route::get('/google5692887e91ddc94b.html', function()
{
    $file = public_path(). "/download/google5692887e91ddc94b.html";  // <- Replace with the path to your .xml file
    if (file_exists($file)) {
        $content = file_get_contents($file);
        return Response::make($content, 200, array('content-type'=>'application/html'));
    }
});
Route::get('/jaylogs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('/testmail',function()
{
    Mail::send('emails.test',[],function($message){
       $message->to('projectmanager24x7@yahoo.com')->subject('laracasts Email');
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
Route::post('/productsSum',['as' => 'products','uses'=>'AuthenticationController@productsSum']);
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
Route::post('/cardpurchase',['as'=>'cardpurchase','uses'=>'CartController@cardPurchase']);


Route::get('/changeshippingaddress/{shippingId}',['as'=>'changeshipping','uses'=>'CartController@changeShippingAddress']);
Route::post('/changeshippingaddress',['as'=>'changeshipping','uses'=>'CartController@addShippingAddress']);

Route::get('/','PagesController@home');

Route::get('/test',['as' => 'test','uses'=>'PagesController@test']);
Route::get('/dummyshop',['as' => 'test','uses'=>'PagesController@dummyshop']);
Route::get('/dummybuy/{product_id}',['as' => 'product','uses'=>'PagesController@dummybuy']);
Route::post('/dummybuy/{product_id}',['as' => 'product','uses'=>'PagesController@dummybuy']);
Route::post('/dummybuypay',['as' => 'dummybuypay','uses'=>'PagesController@dummybuypay']);
Route::post('/dummybuyprocess',['as'=>'dummybuyprocess','uses'=>'PagesController@dummybuyprocess']);
Route::get('/distributor',['as'=>'distributor','uses'=>'PagesController@distributor']);
Route::get('/paytodistributor',['as'=>'paytodistributor','uses'=>'PagesController@paytodistributor']);
Route::post('/paytodistributor',['as'=>'paytodistributor','uses'=>'PagesController@paytodistributor']);
Route::get('/addnewdistributor',['as'=>'addnewdistributor','uses'=>'PagesController@addnewdistributor']);
Route::post('/addnewdistributor',['as'=>'addnewdistributor','uses'=>'PagesController@addnewdistributor']);
Route::get('/about',['as' => 'about','uses'=>'PagesController@about']);
Route::get('/accounting',['as' => 'accounting','uses'=>'PagesController@accounting']);
Route::get('/products',['as' => 'products','uses'=>'PagesController@products']);
Route::get('/product/{productId}',['as' => 'product','uses'=>'PagesController@product']);
Route::get('/info',['as' => 'info','uses'=>'PagesController@info']);
Route::get('/food',['as' => 'food','uses'=>'PagesController@food']);
Route::get('/autoship',['as' => 'autoship','uses'=>'PagesController@autoship']);
Route::get('/autoship2',['as' => 'autoship2','uses'=>'PagesController@autoship2']);
Route::get('/books',['as' => 'books','uses'=>'PagesController@books']);
Route::post('/books',['as' => 'books','uses'=>'PagesController@books']);
Route::get('/stores/{product_group}',['as'=>'storess','uses'=>'PagesController@stores']);
    Route::get('/present',['as' => 'present','uses'=>'PagesController@present']);
Route::get('/energy',['as' => 'energy','uses'=>'PagesController@energy']);
Route::get('/recycling',['as' => 'recycling','uses'=>'PagesController@recycling']);
Route::get('/benefits',['as' => 'about','uses'=>'PagesController@benefits']);
Route::get('/benefits2',['as' => 'benefits2','uses'=>'PagesController@benefits2']);
Route::get('/businesscards',['as' => 'cards','uses'=>'PagesController@businesscards']);
Route::get('/camping',['as' => 'camping','uses'=>'PagesController@camping']);
Route::get('/cooking',['as' => 'cooking','uses'=>'PagesController@cooking']);
Route::get('/cryptocurrency',['as' => 'crypto','uses'=>'PagesController@cryptocurrency']);
Route::get('/ewallet',['as' => 'ewallet','uses'=>'PagesController@ewallet']);
Route::get('/privacy',['as' => 'Privacy','uses'=>'PagesController@privacy']);
Route::get('/privacy2',['as' => 'Privacy2','uses'=>'PagesController@privacy2']);
Route::get('/offshorebank',['as' => 'offshorebank','uses'=>'PagesController@offshorebank']);
Route::get('/bankinterface',['as' => 'interface','uses'=>'PagesController@bankinterface']);
Route::get('/rewards',['as' => 'rewards','uses'=>'PagesController@rewards']);
Route::get('/profitsharing',['as' => 'profitsharing','uses'=>'PagesController@profitsharing']);
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
Route::get('/membercost2',['as' => 'membercost2','uses'=>'PagesController@membercost2']);
Route::get('/mem_agreement',['as' => 'memberagreement','uses'=>'PagesController@memberagreement']);
Route::get('/mem_agreement2',['as' => 'memberagreement2','uses'=>'PagesController@memberagreement2']);
Route::get('/mem_terms',['as' => 'memberaterms','uses'=>'PagesController@memberterms']);
Route::get('/mem_terms2',['as' => 'memberaterms2','uses'=>'PagesController@memberterms2']);
Route::get('/charities',['as' => 'charities','uses'=>'PagesController@charities']);
Route::get('/groups',['as' => 'groups','uses'=>'PagesController@groups']);
Route::get('/house',['as' => 'house','uses'=>'PagesController@house']);
Route::get('/potential',['as' => 'potential','uses'=>'PagesController@potential']);
Route::get('/purpose',['as' => 'purpose','uses'=>'PagesController@purpose']);
Route::get('/purpose2',['as' => 'purpose2','uses'=>'PagesController@purpose2']);
Route::get('/physically',['as' => 'physically','uses'=>'PagesController@physically']);
Route::get('/requirements',['as' => 'requirements','uses'=>'PagesController@requirements']);
Route::get('/requirements2',['as' => 'requirements2','uses'=>'PagesController@requirements2']);
Route::get('/referrallinks',['as' => 'requirements','uses'=>'PagesController@referrallinks']);
Route::get('/emotionally',['as' => 'emotionally','uses'=>'PagesController@emotionally']);
Route::get('/startup',['as' => 'startup','uses'=>'PagesController@startup']);
Route::get('/selection',['as' => 'selection','uses'=>'PagesController@selection']);
Route::get('/selfreliance',['as' => 'selfreliance','uses'=>'PagesController@selfreliance']);
Route::get('/spiritually',['as' => 'spiritually','uses'=>'PagesController@spiritually']);
Route::get('/economically',['as' => 'economically','uses'=>'PagesController@economically']);
Route::get('/plans',['as' => 'plans','uses'=>'PagesController@plans']);
Route::get('/policies',['as' => 'policies','uses'=>'PagesController@policies']);
Route::get('/productsSum',['as' => 'products','uses'=>'PagesController@productsSum']);
Route::get('/discount',['as' => 'discount','uses'=>'PagesController@discount']);
Route::get('/referral',['as' => 'referral','uses'=>'PagesController@referral']);
Route::get('/returns',['as' => 'returns','uses'=>'PagesController@returns']);
Route::get('/returns2',['as' => 'returns2','uses'=>'PagesController@returns2']);
Route::get('/donations',['as' => 'donations','uses'=>'PagesController@donations']);
Route::get('/contact',['as' => 'contact','uses'=>'PagesController@contact']);
Route::get('/water',['as' => 'water','uses'=>'PagesController@water']);
Route::get('/homepage/{userId}',['as' => 'homepage','uses'=>'PagesController@homepage']);
Route::post('/homepage/{userId}',['as' => 'homepage','uses'=>'PagesController@editHomepage']);
Route::get('/money/{userId}',['as' => 'money','uses'=>'PagesController@money']);
Route::get('/traininglinks',['as' => 'traininglinks','uses'=>'PagesController@traininglinks']);
Route::get('/links/food',['as' => 'linksfood','uses'=>'PagesController@linksfood']);
Route::get('/links/water',['as' => 'linkswater','uses'=>'PagesController@linkswater']);
Route::get('/links/energy',['as' => 'linksenergy','uses'=>'PagesController@linksenergy']);
Route::get('/links/recycling',['as' => 'linksrecycling','uses'=>'PagesController@linksrecycling']);
Route::get('/links/camping',['as' => 'linkscamping','uses'=>'PagesController@linkscamping']);
Route::get('/links/cooking',['as' => 'linkscooking','uses'=>'PagesController@linkscooking']);
Route::get('/links/health',['as' => 'linkshealth','uses'=>'PagesController@linkshealth']);
Route::get('/links/house',['as' => 'linkshouse','uses'=>'PagesController@linkshouse']);
Route::get('/links/aquaponics',['as' => 'linkshouse','uses'=>'PagesController@linksaquaponics']);
Route::get('/links/greenhouses',['as' => 'linkshouse','uses'=>'PagesController@linksgreenhouses']);
Route::get('/links/gardening',['as' => 'linkshouse','uses'=>'PagesController@linksgardening']);
Route::get('/links/poultry',['as' => 'linkshouse','uses'=>'PagesController@linkspoultry']);
Route::get('/links/livestock',['as' => 'linkshouse','uses'=>'PagesController@linkslivestock']);
Route::get('/links/protection',['as' => 'linkshouse','uses'=>'PagesController@linksprotection']);
Route::get('/links/orchards',['as' => 'linkshouse','uses'=>'PagesController@linksorchards']);
Route::get('/links/beekeeping',['as' => 'linkshouse','uses'=>'PagesController@linksbeekeeping']);
Route::get('/links/biogas',['as' => 'linkshouse','uses'=>'PagesController@linksbiogas']);
Route::get('/intro',['as'=>'introduction','uses'=>'PagesController@introduction']);

Route::get('/store/{productGroup}/add',['as' => 'login','uses'=>'AuthenticationController@login']);
Route::get('/store/{productGroup}/add/{userId}',['as'=>'storeadd','uses'=>'StoreController@addStore']);
Route::post('/store/{productGroup}/add/{userId}',['as'=>'storeadd','uses'=>'StoreController@saveStore']);
Route::get('/store/{storeId}',['as'=>'store','uses'=>'StoreController@store']);
Route::get('/store/edit/{storeId}',['as'=>'store','uses'=>'StoreController@editStore']);
Route::post('/store/edit/{storeId}',['as'=>'store','uses'=>'StoreController@saveeditStore']);
Route::get('/store/addproduct/{storeId}',['as'=>'storeproduct','uses'=>'StoreController@addproducts']);
Route::post('/store/addproduct/{storeId}',['as'=>'storeproduct','uses'=>'StoreController@addproduct']);
Route::get('/store/{storeId}/product/{productId}',['as'=>'storeproduct','uses'=>'StoreController@displayproduct']);
Route::get('/store/{storeId}/productedit/{productId}',['as'=>'storeproduct','uses'=>'StoreController@editproduct']);
Route::post('/store/{storeId}/productedit/{productId}',['as'=>'storeproduct','uses'=>'StoreController@saveeditproduct']);
Route::get('/store/{storeId}/delete_product/{productId}',['as'=>'storeproduct','uses'=>'StoreController@deleteproduct']);

Route::get('/onekind',['as'=>'onekind','uses'=>'StoreController@onekind']);
Route::get('/onekind/sub/{productCategory}',['as'=>'onekind','uses'=>'StoreController@onekindSub']);
Route::get('/onekind/{productId}',['as'=>'onekind','uses'=>'StoreController@onekindproduct']);
Route::get('/multikind',['as'=>'onekind','uses'=>'StoreController@multikind']);
Route::get('/multikind/sub/{productCategory}',['as'=>'onekind','uses'=>'StoreController@multikindSub']);
Route::get('/multikind/{productId}',['as'=>'onekind','uses'=>'StoreController@multikindproduct']);

Route::get('/gold',['as' => 'gold','uses'=>'GoldPagesController@gold']);
Route::get('/gold/traininglinks',['as' => 'traininglinks','uses'=>'GoldPagesController@traininglinks']);
Route::get('/gold/whitepaper',['as' => 'whitepaper','uses'=>'GoldPagesController@whitepaper']);
Route::get('/gold/whitepaper/download',['as' => 'whitepaper','uses'=>'GoldPagesController@downloadwhitepaper']);
Route::get('/gold/introduction/download',['as' => 'whitepaper','uses'=>'GoldPagesController@downloadintroduction']);
Route::get('/gold/intro',['as' => 'intro','uses'=>'GoldPagesController@introduction']);
Route::get('/gold/crypto',['as' => 'crypto','uses'=>'GoldPagesController@crypto']);
Route::get('/gold/vue',['as' => 'vue','uses'=>'GoldPagesController@vue']);
Route::get('/gold',['as' => 'gold','uses'=>'GoldPagesController@gold']);


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

