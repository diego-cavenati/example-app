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
    // creo le variabili
    $page_title = "Welcome to Laravel";
    $class_number = 72;
    // le passo alla view
    return view('welcome', compact('page_title', 'class_number'));
})->name('home');

Route::get('/about', function () {
    $data = [
        'page_title' => 'About classe 72',
        'description' => 'Lorem',
        'students' => ['Simone', 'Yuri'],
        'teachers' => [],
    ];
    return view('about', $data);
})->name('about');
