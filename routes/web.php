<?php

use App\Http\Controllers\SaranaAirMinumController;
use App\Models\SaranaAirMinum;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    $data = (new SaranaAirMinumController)->getAll();

    return view('dashboard', ['datas' => $data]);
});
Route::get('/Kanban', function () {
    return view('kanban');
});
Route::post('/kanban/store', [SaranaAirMinumController::class, 'store'])->name('saranaAirMinum.store');


