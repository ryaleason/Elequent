<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getController extends Controller
{
    public function tampil(){
        $data = [
            'Luna', 'Farel', 'Diva', 'Faizzatur', 'Adith', 'Aditya', 'Aruni', 'Kusuma', 'Nella', 'Dimas',
            'Irza', 'Bunga', 'Dwi', 'Ibriel', 'Ahmad', 'Alif', 'Elvania', 'Diah', 'Audryan', 'Gabrial',
            'Al', 'Fanisa', 'Delila', 'Fathur', 'Nuril', 'Anas', 'Fika', 'Andika'
        ];
        return view('tugas2.index' ,compact('data'));
    }
    public function tampill(){
        $data = ['diah','faiza','fani','irza','bunga','aruni','diva','Irza','Dewi','Delila'];
        return view('tugas.siswa' ,compact('data'));
    }
    public function muncul(){
        $data = ['diah','faiza','fani','irza','bunga','aruni','diva','Irza','Dewi','Delila'];
        return view('tugas.siswas' ,compact('data'));
    }
}
