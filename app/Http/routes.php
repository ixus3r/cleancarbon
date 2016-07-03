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
foreach (explode('/', Request::path()) as $key => $value) {
    if ($key == 0) {
        $params = '{page}';
    } else {
        $params .= "/{param$key}";
    }
}
Route::get('/', ['uses' => 'ViewController@view']);
Route::get($params, ['uses' => 'ViewController@view']);
