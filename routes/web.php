<?php

use App\Livewire\Example;
use App\Livewire\ParentComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', Example::class);

Route::get('/nested', ParentComponent::class);

Route::get('/home', function () {
    return view('home');
});
