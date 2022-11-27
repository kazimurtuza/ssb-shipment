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


Route::get('/home', function () {
    return view('user.index');
});


Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/admin', 'adminAuthController@login')->name('admin.login');

    Route::get('/', 'FrontendController@index')->name('home');


    Route::post('user/register', 'UserAuthController@register')->name('user.register');
    Route::get('user/shipment', 'ShipmentController@shipment')->name('user.shipment');
    Route::post('user/stripe/payment', 'ShipmentController@shipmentPayment')->name('stripe.post');
    Route::get('shipment/price/calculator', 'ShipmentController@shipment_price_calculator')->name('shipment.price.calculator');
    Route::get('shipment/charity', 'ShipmentController@charity_shipment')->name('shipment.charity');


    Route::group(['middleware' => 'AdminCheck'], function () {
        Route::get('admin/shipment/list', 'ShipmentController@shipment_list')->name('admin.shipment.list');
        Route::get('admin/shipment/pending/list', 'ShipmentController@shipmentPending')->name('admin.shipment.pending.list');
        Route::get('admin/shipment/pickedup/list', 'ShipmentController@shipmentPickedup')->name('admin.shipment.pickedup.list');
        Route::get('admin/shipment/shipping/list', 'ShipmentController@shipmentshippingList')->name('admin.shipment.shipping.list');
        Route::get('admin/shipment/completed/list', 'ShipmentController@shipmentCompletedList')->name('admin.shipment.completed.list');
        Route::get('admin/shipment/pickup/info', 'ShipmentController@shipmentPickupInfo')->name('admin.shipment.pickup_info');
        Route::post('admin/shipment/pickup/info', 'ShipmentController@shipmentPickupInfoStore')->name('admin.shipment.pickup_info.store');
        Route::get('admin/shipment/container', 'ShipmentController@shipmentContainer')->name('admin.shipment.container');
        Route::post('admin/shipment/container/create', 'ShipmentController@shipmentContainerCreate')->name('admin.shipment.container.create');
        Route::get('admin/shipment/details', 'ShipmentController@shipmentDetails')->name('admin.shipment.details');
        Route::get('admin/drop/shipment', 'ShipmentController@dropShipment')->name('admin.drop.shipment');
        Route::get('admin/shipment/status/change', 'ShipmentController@shipmentStatusChange')->name('shipping.status');
        Route::post('admin/shipment/drop', 'ShipmentController@shipmentDropStore')->name('admin.shipment.shipping.store');
        Route::get('admin/shipment/payment', 'ShipmentController@payment_info')->name('admin.shipment.payment');
        Route::get('admin/loginout', 'adminAuthController@logout')->name('admin.loginout');
    });

    Route::get('shipment/product/print', 'ShipmentController@productPrint')->name('shipment.product.print');



    Route::group(['middleware' => 'UserCheck'], function () {
        Route::get('user/profile', 'UserController@profile')->name('user.profile');
        Route::get('user/payment/report', 'UserController@paymentReport')->name('user.payment.report');

    });


    //admin
    Route::get('admin/login', 'adminAuthController@login')->name('admin.login');
    Route::post('admin/login/check', 'adminAuthController@checkLogin')->name('admin.login.check');
    //phone

    Route::get('driver/pickup/shipments', 'phoneShipmentDriverController@shipmentPickupList')->name('driver.pickup.shipment');
    Route::get('driver/shipment/pickedup', 'phoneShipmentDriverController@shipmentPickedup')->name('shipment.pickedup');
    Route::get('driver/shipment/document/upload', 'phoneShipmentDriverController@shipmentDocument')->name('shipment.documents.upload');
    Route::post('driver/shipment/document/store', 'phoneShipmentDriverController@shipmentDocumentStore')->name('shipment.documents.store');


    //admin
    //map
    Route::get('driver/shipment/map', 'phoneShipmentDriverController@shipmentPickupMap')->name('driver.shipment.map');
    //map

    //driver
    Route::get('driver/driverList', 'DriverController@index')->name('driverList');
    Route::post('driver/create', 'DriverController@create')->name('driver.create');

    Route::get('driver/pickup/mail/send', 'DriverController@pickupListMail')->name('driver.pickup.mail.send');

    //driver


    //customer
    Route::post('shipment.charity.pay', 'ShipmentController@charityPay')->name('charity.shipment.payment');
    //customer

    //print product
    Route::get('shipment/invoice', 'ShipmentController@invoice')->name('shipment.invoice');

    //print product


    //Home

    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('user/logout', 'UserAuthController@userLogout')->name('user.logout');
    Route::post('user/id', 'UserAuthController@userlogin')->name('user.login');


});


