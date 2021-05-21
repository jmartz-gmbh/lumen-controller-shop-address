<?php

use Illuminate\Support\Facades\Route;

Route::get('/address/view/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\AddressController@view'
]);

Route::get('/address', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\AddressController@all'
]);
