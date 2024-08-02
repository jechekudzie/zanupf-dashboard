<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/members', function () {
    return view('members');
});

Route::get('/membership', function () {
    return view('membership');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
