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
Route::get('/login/google','Auth\LoginController@redirectToProvider')->name('google.login');
Route::get('/callback','Auth\LoginController@handleProviderCallback');

Route::get('auth/facebook', 'Auth\LoginController@redirectToProviderF')->name('facebook.login');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallbackF');


Route::get('/accommodation', 'AccommodationController@index');
Route::get('/accommodation/{id}', 'AccommodationController@show');
Route::get('/apartment', 'ApartmentController@index');
Route::get('/apartment/{id}', 'ApartmentController@show');
Route::get('/event', 'EventController@index');
Route::get('/event/{id}', 'EventController@show');
Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/{id}', 'RestaurantController@show');
Route::get('/order/{room_id}', 'OrderController@getOrder');

Route::post('/result', ['as' => 'postResult', 'uses' => 'HomeController@result']);
//Route::post('/order/room', ['as' => 'postResult', 'uses' => 'HomeController@orderRoom']);
Route::post('/order/room','HomeController@orderRoom');
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

    Route::get('/admin/room','Admin\RoomController@index');
    Route::get('/admin/room/create','Admin\RoomController@create');
    Route::post('/admin/room/store','Admin\RoomController@store');
    Route::delete('/admin/room/{id}/delete','Admin\RoomController@destroy');
    Route::get('/admin/room/{id}/edit','Admin\RoomController@edit');
    Route::put('/admin/room/{id}/update','Admin\RoomController@update');
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


Route::get('/order/{id}/{date_in}/{date_out}/{user_id}', ['as' => 'getOrder', 'uses' => 'HomeController@order']);

Auth::routes();

Route::get('service/{id}/index', [
    'uses' => 'ServiceController@getIndex',
    'as' => 'service.index'
]);


Route::get('/add-to-cart/{id}', [
    'uses' => 'ServiceController@getAddToCart',
    'as' => 'service.addToCart'
]);

Route::get('/service-cart', [
    'uses' => 'ServiceController@getCart',
    'as' => 'service.serviceCart'
]);







