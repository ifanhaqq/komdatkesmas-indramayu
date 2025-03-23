<?php

use App\Http\Controllers\SaranaAirMinumController;
use App\Models\SaranaAirMinum;
use Illuminate\Support\Facades\Route;

// Index
Route::get('/', function () {
    return view('login');
});

// Dashboard
Route::get('/dashboard', function () {
    $data = (new SaranaAirMinumController)->getAll();

    return view('dashboard', ['datas' => $data]);
});

// Data Entry
Route::get('/Entry-Data', function () {
    return view('EntryData');
});

// Data Kematian
Route::get('/Data-Kematian', function () {
    return view('DataKematian');
});

Route::get('/Data-Jampersal', function () {
    return view('DataJampersal');
});
Route::post('/kanban/store', [SaranaAirMinumController::class, 'store'])->name('saranaAirMinum.store');

Route::get('/data-pjb', function () {
    return view('dataPjb');
});

Route::prefix('data-indikator')->group(function () {
    Route::get('/', function () {
        return view('DataIndikator');
    }); 
    Route::get('/sub-data-indikator', function () {
        return view('subDataIndikator');
    }); 
});

Route::get('/data-program', function () {
    return view('data-program');
});
Route::get("/data-usia-sekolah-dan-remaja", function () {
    return view('dataUsiaSekolahDanRemaja');
});

Route::get("/test", function () {
    return view("testView");
})->name("test");