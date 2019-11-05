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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/accommodation', 'AccommodationController@index');
Route::get('/apartment', 'ApartmentController@index');
Route::get('/event', 'EventController@index');
Route::get('/restaurant', 'RestaurantController@index');

Route::post('/result', ['as' => 'postResult', 'uses' => 'HomeController@result']);
Route::get('/order/{id}/{date_in}/{date_out}/{user_id}', ['as' => 'getOrder', 'uses' => 'HomeController@order']);
Auth::routes();

Route::get('customer/{id}/index', 'CustomerServiceController@index');
Route::get('/error/permission', 'ErrorController@permission');

Route::group(['middleware' => ['auth', 'role'], 'role' => 'admin'], function () {
    Route::get('/admin/checkin', 'Admin\CheckInOutController@checkIn');
    Route::put('/admin/commitcheckin', 'Admin\CheckInOutController@commitCheckIn');
    Route::get('/admin/checkout', 'Admin\CheckInOutController@checkOut');
    Route::put('/admin/commitcheckout', 'Admin\CheckInOutController@commitCheckOut');
    Route::post('/getOrderInfo', 'Admin\CheckInOutController@getOrderInfo');
    Route::post('/getCheckoutOrderInfo', 'Admin\CheckInOutController@getCheckoutOrderInfo');


    Route::get('/admin/orderservicemanager', 'Admin\OrderServiceController@index');
    Route::get('/admin/service', 'Admin\ServiceController@index');
    Route::put('/admin/service/{id}/update', 'Admin\ServiceController@update');
    Route::delete('/admin/service/{id}/delete', 'Admin\ServiceController@delete');
    Route::post('/admin/service/save', 'Admin\ServiceController@save');
});

Route::get('/cart', function () {
    return view('cart.index');
});


/*
Route::get('/cart', [
    'uses' => 'ServiceController@getCart',
    'as' => 'cart.index'
]);

*/


Route::post('/result', ['as'=>'postResult', 'uses'=>'HomeController@result']);
Route::get('/order/{id}/{date_in}/{date_out}/{user_id}', ['as'=>'getOrder', 'uses'=>'HomeController@order']);
Auth::routes();

Route::get('service/{id}/index', [
	'uses'=>'ServiceController@getIndex',
	'as'=>'service.index'
	]);


Route::get('/add-to-cart/{id}', [
    'uses' => 'ServiceController@getAddToCart',
    'as' => 'service.addToCart'
]);

Route::get('/service-cart', [
    'uses' => 'ServiceController@getCart',
    'as' => 'service.serviceCart'
]);







