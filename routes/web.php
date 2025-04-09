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

// Kesehatan Masyarakat

// Kesehatan Masyarakat -> Sub Bagian Kesehatan Keluarga Dan Gizi
Route::get("/test/kesehatan-masyarakat/sub-bag-kesehatan-keluarga-dan-gizi/si-gizi", function () {
    return view("kesehatanMasyarakat.subBagKesehatanKeluargaDanGizi.siGizi");
});

// ====================================================================

// Yankes

// Yankes -> Primer
Route::get('/test/yankes/primer/gawat-darurat-non-psc119', function () {
    return view('yankes.primer.gawatDaruratNonPsc119View');
});

Route::get('/test/yankes/primer/laporan-rawat-jalan-bp-umum', function () {
    return view('yankes.primer.laporanRawatJalanBpUmumView');
});

Route::get('/test/yankes/primer/laporan-rawat-inap', function () {
    return view('yankes.primer.laporanRawatInapView');
});

Route::get('/test/yankes/primer/laporan-ugd-kll', function () {
    return view('yankes.primer.laporanUgdKllView');
});

Route::get('/test/yankes/primer/perkesmas-pembina-keluarga-mandiri', function () {
    return view('yankes.primer.perkesmasPembinaKeluargaMandiriView');
});

Route::get('/test/yankes/primer/perkesmas-laporan-bulanan', function () {
    return view('yankes.primer.perkesmasLaporanBulananView');
});

Route::get('/test/yankes/primer/laporan-pis-pk', function () {
    return view('yankes.primer.laporanPisPkView');
});

Route::get('/test/yankes/primer/laporan-kesehatan-tradisional', function () {
    return view('yankes.primer.laporanKesehatanTradisionalView');
});


// ...

// ====================================================================

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
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-persentase-ibu-hamil-diimunisasi", function () {
    return view("p2p.subBagImunisasi.laporanManual.jumlahDanPersentaseIbuHamilDiimunisasiView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-dan-persentase-wus-tidak-hamil-diimunisasi", function () {
    return view("p2p.subBagImunisasi.laporanManual.jumlahDanPersentaseWUSTidakHamilDiimunisasiView");
});
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/jumlah-total-dan-persentase-wus-hamil-plus-tidak-hamil-diimunisasi-td", function () {
    return view("p2p.subBagImunisasi.laporanManual.jumlahTotalDanPersentaseWUSHamilPlusTidakHamilDiimunisasiTDView");
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
Route::get("/test/p2p/sub-bagian-imunisasi/laporan-manual/spm", function () {
    return view("p2p.subBagImunisasi.laporanManual.spm");
});

