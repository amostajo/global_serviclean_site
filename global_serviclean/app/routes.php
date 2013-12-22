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

Route::get('/contact', array('as' => 'contact', function() {
  return View::make('other.contact');
}));

Route::get('/employment', array('as' => 'employment', function() {
  return View::make('other.employment');
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
    Route::resource('employment', 'EmploymentRequestController');
});

Route::get('/email', array('as' => 'email', function() {
  return View::make('emails.other.contact', array(
      'name' => 'Caballero Alvarado',
      'email' => 'prueba@gmail.com',
      'feedback' => 'Muy bonito el sitio'
  ));
}));