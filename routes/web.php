<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::middleware("auth")->group(function () {
    Route::get("/task", App\Livewire\Task\Index::class)->name('task');
});
Route::get("/login", App\Livewire\Auth\Login::class)->name('login');
