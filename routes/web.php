<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/jaid-fasal', function () {
    return view('frontend.jaid');
})->name('jaid-fasal');

Route::get('/rabi-fasal', function () {
    return view('frontend.rabi');
})->name('rabi-fasal');

Route::get('/khareef-fasal', function () {
    return view('frontend.khareef');
})->name('khareef-fasal');

Route::get('/register', function () {
    return view('frontend.forms.sign-up');
})->name('register');

Route::get('/login', function () {
    return view('frontend.forms.login');
})->name('login');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
