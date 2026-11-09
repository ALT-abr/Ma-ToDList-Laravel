<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/demo-formulaire', fn () => view('demo-formulaire'));

Route::post('/demo-envoi', fn (Request $request) => 'Reçu : '.$request->input('title'));