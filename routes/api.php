<?php

Route::get('/', function () {
    return dd('API Laravel');
});

Route::apiResource('carro','App\Http\Controllers\api\CarroController');