<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get( uri: '/', action: \App\Livewire\Home::class)->name( name: 'home' );

Route::get( uri: '/about', action: \App\Livewire\About::class)->name( name: 'about' );

Route::get( uri: '/contact', action: \App\Livewire\Contact::class)->name( name: 'contact' );

Route::get( uri: '/post', action: \App\Livewire\Post\Index::class)->name( name: 'post.index');


Route::get( uri:'users/{user}', action:  \App\Livewire\Users\Show::class)->name( name: 'users.show');
