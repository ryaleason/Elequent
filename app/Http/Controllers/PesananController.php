<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Menu;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // Menampilkan daftar pesanan
    public function index()
    {
        $pelanggans = Pelanggan::all();
        $menus = Menu::all();
        $pesanans = Pesanan::all(); // Ambil semua data pesanan
        return view('pesanan.index', compact('pesanans', 'pelanggans', 'menus')); // Kirim data ke view
    }

    // Menampilkan form tambah pesanan
    public function create()
    {
        $pelanggans = Pelanggan::all();
        $menus = Menu::all();
        // Mengambil data pelanggan dan menu yang tersedia

        // Mengecek apakah ada pelanggan dan menu yang tersedia
        if ($pelanggans->isEmpty()) {
            return redirect()->route('pelanggans.create')->with('error', 'Harap tambah pelanggan terlebih dahulu.');
        }

        if ($menus->isEmpty()) {
            return redirect()->route('menus.create')->with('error', 'Harap tambah menu terlebih dahulu.');
        }



        // Tampilkan form untuk input pesanan dengan data pelanggan dan menu
        return view('pesanan.create', compact('pelanggans', 'menus'));
    }

    // Menyimpan data pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'id_menu' => 'required|exists:menus,id',
            'jumlah' => 'required|integer|min:1',
            'status_pesanan' => 'required|string|in:pending,completed,canceled',
        ]);

        $menu = Menu::findOrFail($request->id_menu);

        Pesanan::create([
            'id_pelanggan' => $request->pelanggan_id,
            'id_menu' => $request->id_menu,
            'jumlah' => $request->jumlah,
            'total_harga' => $menu->harga * $request->jumlah,
            'tanggal_pesanan' => now(), // Add current date
            'status_pesanan' => $request->status_pesanan,
        ]);

        return redirect()->route('pesanans.index')->with('success', 'Pesanan berhasil dibuat');
    }

    // Menampilkan form edit pesanan
    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id); // Cari pesanan berdasarkan ID
        $pelanggans = Pelanggan::all(); // Ambil semua pelanggan
        $menus = Menu::all(); // Ambil semua menu
        return view('pesanan.edit', compact('pesanan', 'pelanggans', 'menus')); // Tampilkan form edit dengan data pesanan
    }

    // Memperbarui data pesanan
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);

        // Validasi input
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'menu_id' => 'required|exists:menus,id',
            'jumlah' => 'required|integer|min:1',
            'status_pesanan' => 'required|string|in:pending,completed,canceled',
        ]);

        // Mengambil menu yang dipesan
        $menu = Menu::findOrFail($request->menu_id);
        $totalHarga = $menu->harga * $request->jumlah; // Hitung total harga

        // Update data pesanan
        $pesanan->update([
            'pelanggan_id' => $request->pelanggan_id,
            'menu_id' => $request->menu_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $totalHarga,
            'status_pesanan' => $request->status_pesanan,
        ]);

        // Redirect ke halaman daftar pesanan
        return redirect()->route('pesanans.index');
    }

    // Menghapus data pesanan
    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete(); // Hapus data pesanan
        return redirect()->route('pesanans.index'); // Kembali ke daftar pesanan
    }
}
