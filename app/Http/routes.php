<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
 return view('welcome') ;
});



/* ------------------------------------------------
 **************************************************
 * Admin panel
 * ------------------------------------------------
 * ************************************************
 * @return response
 * */

Route::group(['prefix'=>'admin' , 'namespace' =>'Admin'] , function(){

/*GET the route of page /admin*/
    Route::get('/' , 'adminHomeController@index');

/*GET the route of the admin bookings panel by group*/
    Route::group(['prefix'=>'bookings' , 'namespace' => 'Bookings'] , function(){
//       GET the route of the Admin Bookings Panel
        Route::get('/' , 'bookingsController@index') ;

//        GET the bookings Completed filter
//        GET the Add Bookings
        Route::get('/add' , 'bookingsController@create') ;
    }) ;
/*GET the route of the admin Cars panel by Group*/
    Route::group(['prefix'=>'cars','namespace'=>'Cars'] , function(){
//        GET the route for Admin Cars Panel
        Route::get('/', 'carsController@index') ;
    }) ;
/**/

});