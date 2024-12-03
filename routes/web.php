<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;



Route::resource('menus', MenuController::class);
Route::resource('pelanggans', PelangganController::class);
Route::resource('pesanans', PesananController::class);





Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);

Route::get('/dashboard/siswa', function () {

    $data = [
        ['nama' => 'Diah', 'nilai' => 90],
        ['nama' => 'Fani', 'nilai' => 40],
        ['nama' => 'Irza', 'nilai' => 34],
        ['nama' => 'Faiza', 'nilai' => 85],
        ['nama' => 'Aruni', 'nilai' => 78],
        ['nama' => 'Bunga', 'nilai' => 95],
    ];

    return view('tugas1.siswa', compact('data'));
})->name('dashboard/siswa');

Route::get('/dashboard/guru', function () {
    $data = [
        ['nama' => 'Bu Lasmi', 'mapel' => 'Agama'],
        ['nama' => 'Bu Arie', 'mapel' => 'Matematika'],
        ['nama' => 'Pak Lukman', 'mapel' => 'Guru Produktif Rpl'],
        ['nama' => 'Pak Ryan', 'mapel' => 'Guru Produktif Rpl'],
        ['nama' => 'Pak Hamid', 'mapel' => 'TIK'],
        ['nama' => 'Bu Erni', 'mapel' => 'Matematika'],
    ];
    return view('tugas1.guru', compact('data'));
})->name('dashboard/guru');

Route::get('/dashboard/galery', function () {
    $link = [
        'https://i.pinimg.com/736x/e7/36/99/e73699d3e53860622c0bedd34a708fdd.jpg',
        'https://i.pinimg.com/236x/63/4f/11/634f11b6ab8afdcc404fedfe04562380.jpg',
        'https://i.pinimg.com/474x/b6/e5/78/b6e5788815357e9ce628a458bae910d6.jpg',
        'https://i.pinimg.com/736x/ad/ad/09/adad093f07d195693c6827029a8e9542.jpg'
    ];
    return view('tugas1.galery', compact('link'));
})->name('dashboard/galery');

Route::get('/siswa2', [getController::class, 'tampil']);
