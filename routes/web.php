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

Route::get('/hello/{name}', function (string $name) {
    return 'Hello ' . $name . '!';
});

Route::get('/news', function () {
    return 'Apple представила на WWDC2023 свою самую обсуждаемую новинку — AR/VR-гарнитуру, получившую название Apple Vision Pro. Устройство управляется глазами, руками и голосом, будет стоить $3499 и появится в продаже в 2024 году. ';
});
