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
Route::get('/Entry-Data', function () {
    return view('EntryData');
});

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