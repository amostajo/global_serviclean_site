<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function() {
  return View::make('home.index');
}));

// Services, outsourcing
Route::group(array('prefix' => 'services'), function()  {
  Route::get('/outsourcing', array('as' => 'outsourcing', function() {
    return View::make('services.outsourcing');
  }));
});

// Web site ajax
Route::group(array('prefix' => 'processing', 'before' => 'csrf'), function()  {
    Route::resource('contact', 'ContactUsController');
    Route::resource('budget', 'BudgetRequestController');
});

Route::get('/email', array('as' => 'email', function() {
  return View::make('emails.other.budget', array(
      'name' => 'Caballero Alvarado',
      'email' => 'prueba@gmail.com',
      'company' => 'Amsgames',
      'service' => 'Limpieza de tele',
      'phone' => '8707-5105',
      'address' => '',
      'detail' => ''
  ));
}));