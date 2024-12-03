<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggans = Pelanggan::all(); 
        return view('pelanggan.index', compact('pelanggans'));
    }

    // Menampilkan form tambah pelanggan
    public function create()
    {
        return view('pelanggan.create'); // Tampilkan form untuk input pelanggan
    }

    // Menyimpan data pelanggan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        // Simpan data pelanggan
        Pelanggan::create($request->all());

        // Redirect ke halaman daftar pelanggan
        return redirect()->route('pelanggans.index');
    }

    // Menampilkan form edit pelanggan
    public function edit(Pelanggan $pelanggan)
    { // Cari pelanggan berdasarkan ID
        return view('pelanggan.edit', compact('pelanggan')); // Tampilkan form edit dengan data pelanggan
    }

    // Memperbarui data pelanggan
    public function update(Request $request,Pelanggan $pelanggan)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        $pelanggan->update($request->all());

        return redirect()->route('pelanggans.index');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete(); // Hapus data pelanggan
        return redirect()->route('pelanggans.index'); // Kembali ke daftar pelanggan
    }
}

