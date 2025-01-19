<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/login', function(Request $request) {
    if($request->password == 'twojdenisbesos')
    {
        session()->put('login', true);
        return redirect()->route('askforvalentine');
    } else {
        return redirect()->back()->with('error', true);
    }
})->name('login');

Route::get('/czy-bedziesz-moja-walentynka', function() {
    if(session()->has('login'))
    {
        return view('askforvalentine');
    } else {
        return redirect()->route('welcome');
    }
})->name('askforvalentine');

Route::get('/omg-ciesze-sie', function() {
    if(session()->has('login'))
    {
        return view('celebrate');
    } else {
        return redirect()->route('welcome');
    }
})->name('celebrate');

Route::get('/wybierz-jedzenie', function() {
    if(session()->has('login'))
    {
        return view('choosefood');
    } else {
        return redirect()->route('welcome');
    }
})->name('choosefood');

Route::post('/wybierz-jedzenie', function(Request $request) {
    if(session()->has('login'))
    {
        session()->put('food', $request->food);
        return redirect()->route('doingafter');
    } else {
        return redirect()->route('welcome');
    }
});

Route::get('/co-robimy-dalej', function() {
    if(session()->has('login'))
    {
        return view('doingafter');
    } else {
        return redirect()->route('welcome');
    }
})->name('doingafter');

Route::post('/co-robimy-dalej', function(Request $request) {
    if(session()->has('login'))
    {
        session()->put('activity', $request->activity);
        return redirect()->route('end');
    } else {
        return redirect()->route('welcome');
    }
});

Route::get('/dzieki-rafalku', function() {
    if(session()->has('login'))
    {
        return view('end');
    } else {
        return redirect()->route('welcome');
    }
})->name('end');


