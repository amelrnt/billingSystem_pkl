<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', 'ContractController@allContract');

// fix used connect with db
Route::get('/amData', 'AMController@showAll');
Route::view('/formAM', 'form_am');
Route::get('/formAM/{id}', 'AMController@showById');
Route::post('/newAM/{id?}', 'AMController@putData'); 

Route::get('/customerData', 'CustomerController@showAll');
Route::view('/formCust', 'form_cust');
Route::get('/formCust/{id}', 'CustomerController@showById');
Route::post('/custCP', 'CustomerController@insert'); 
Route::post('/newCust/{id?}', 'CustomerController@putData');

Route::view('/formCp', 'form_cp');
Route::get('/formCp/{id}', 'CustomerCPController@showById');
Route::get('/formCpNew/{id}', 'CustomerCPController@inputData'); 
Route::post('/newCP/{id?}', 'CustomerCPController@putData'); // masih gagal

Route::get('/productData', 'ProductController@showAll');
Route::view('/formProduct', 'form_product');
Route::get('/formProduct/{id}', 'ProductController@showById');
Route::post('/newProduct', 'ProductController@postData');
Route::post('/newProduct/{id?}', 'ProductController@putData'); 

Route::view('/reportchr','chart-report');
Route::get('/reportctr', 'ContractController@report');

Route::get('/formContract', 'ContractController@unregisteredCompany');
Route::get('/formContract/{id}', 'ContractController@registeredCompany');
Route::get('/editContract/{idContract}', 'ContractController@editContract');
Route::post('/newContract', 'ContractController@postData');
Route::post('/newContract/{id?}', 'ContractController@putData');
//payment status
Route::get('/formPayment/{id}', 'ContractController@paymentInfo');
Route::post('/payment/{id}' , 'ContractController@addPayment');

Route::view('/userInfo', 'userinfo');
//Route::view('/formPayment', 'form_Payment');

//send email with this route
Route::get('/mailsend/{id}', 'ContractController@mailReady'); // id contract
Route::get('/mailmanual', 'ContractController@mailManual');

Route::view('/mail', 'mailTemplate');

//Route::view('/fr','form_component');