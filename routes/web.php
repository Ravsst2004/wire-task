<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::middleware("auth")->group(function () {
    Route::get("/task", App\Livewire\Task\Index::class)->name('task');
    // Route::get("/task/create", App\Livewire\Task\Create::class)->name('task.create');
    Route::get("/task/{task}", App\Livewire\Task\Show::class)->name('task.show');
    Route::get("/task/{task}/edit", App\Livewire\Task\Update::class)->name('task.update');
});
Route::get("/login", App\Livewire\Auth\Login::class)->name('login');
Route::get("/register", App\Livewire\Auth\Register::class)->name('register');
