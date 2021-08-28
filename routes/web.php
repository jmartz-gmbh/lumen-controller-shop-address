<?php

use Illuminate\Support\Facades\Route;

Route::get('/address/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopAddressController@id'
]);

Route::get('/addresses', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopAddressController@all'
]);
