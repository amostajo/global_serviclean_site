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
Route::group(array('prefix' => 'services'), function() {
  Route::get('/outsourcing', array('as' => 'outsourcing', function() {
    return View::make('services.outsourcing');
  }));
  Route::get('/constructionend', array('as' => 'constructionend', function() {
    return View::make('services.constructionend');
  }));
  Route::get('/deepcleaning', array('as' => 'deepcleaning', function() {
    return View::make('services.deepcleaning');
  }));
  Route::get('/windows', array('as' => 'windows', function() {
    return View::make('services.windows');
  }));
  Route::get('/industrial', array('as' => 'industrial', function() {
    return View::make('services.industrial');
  }));
});

// Web site ajax
Route::group(array('prefix' => 'processing', 'before' => 'csrf'), function() {
  Route::resource('contact', 'ContactUsController');
  Route::resource('budget', 'BudgetRequestController');
  Route::resource('employment', 'EmploymentRequestController');
});

Route::get('/email', array('as' => 'email', function() {
  return View::make('emails.other.budget', array(
      'name' => 'Pepe León',
      'email' => 'prueba@gs.com',
      'company' => 'Wachipato CR',
      'phone' => '60051553',
      'service' => 'Personal de limpieza',
      'address' => 'Quiero mi servicio aqui',
      'detail' => 'Quiero mi servicio aqui',
));
}));