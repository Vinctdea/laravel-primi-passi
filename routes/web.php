<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'sono un titolo da variabile';
    $subtitle = 'sono un sottotitolo da variabile';

    $data = [
        'title' => $title,
        'subtitle' => $subtitle
    ];
    return view('home', $data);
});
