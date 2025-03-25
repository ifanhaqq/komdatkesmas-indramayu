<?php

use App\Http\Controllers\SaranaAirMinumController;
use App\Models\SaranaAirMinum;
use Illuminate\Support\Facades\Route;

// Index
Route::get('/', action: function () {
    return view('auth.login');
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

// Rewrite

/**
 * Ini adalah Routing untuk testing view
 */

// P2P

// P2P -> Sub Bagian Imunisasi -> Aplikasi Kemenkes
// ...

// P2P -> Sub Bagian Imunisasi -> Laporan Manual
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-baduta", function() {
    return view("p2p.subBagImunisasi.laporanManual.hasilImunisasiBadutaView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/hasil-imunisasi-bayi", function () {
    return view("p2p.subBagImunisasi.laporanManual.hasilImunisasiBayiView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-presentasi-ibu-hamil-diimunisasi", function () {
    return view("p2p.subBagImunisasi.laporanManual.jumlahDanPresentasiIbuHamilDiimunisasiView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-presentasi-wus-tidak-hamil-diimunisasi", function () {
    return view("p2p.subBagImunisasi.laporanManual.jumlahDanPresentasiWUSTidakHamilDiimunisasiView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-total-dan-presentase-wus-hamil-plus-tidak-hamil-diimunisasi-td", function () {
    return view("p2p.subBagImunisasi.laporanManual.jumlahTotalDanPresentaseWUSHamilPlusTidakHamilDiimunisasiTDView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td2-plus-bumil", function () {
    return view("p2p.subBagImunisasi.laporanManual.statusTD2PlusBumilView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td-ibu-hamil", function () {
    return view("p2p.subBagImunisasi.laporanManual.statusTDIbuHamilView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/status-td-wus-tidak-hamil", function () {
    return view("p2p.subBagImunisasi.laporanManual.statusTDWUSTidakHamilView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/status-wus-hamil-plus-tidak-hamil-diimunisasi-td", function () {
    return view("p2p.subBagImunisasi.laporanManual.statusWUSHamilPlusTidakHamilDiimunisasiTDView");
});

