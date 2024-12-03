@extends('layouts.crudLayout')

@section('content')
    <div class="container">
        <h2 class="text-2xl text-white font-semibold mb-4">Tambah Pesanan Baru</h2>

        <!-- Menampilkan pesan error jika ada -->
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Form untuk menambah pesanan -->
        <form action="{{ route('pesanans.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 gap-4" method="POST">
            @csrf

            <!-- Input Pelanggan -->
            <div class="form-group">
                <label for="pelanggan_id">Pelanggan</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('pelanggan_id') is-invalid @enderror" id="pelanggan_id" name="pelanggan_id"
                    required>
                    <option value="">Pilih Pelanggan</option>
                    @foreach ($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->id }}" {{ old('pelanggan_id') == $pelanggan->id ? 'selected' : '' }}>
                            {{ $pelanggan->nama }}</option>
                    @endforeach
                </select>
                @error('pelanggan_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Menu -->
            <div class="form-group">
                <label for="menu_id">Menu</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('id_menu') is-invalid @enderror" id="id_menu" name="id_menu" required>
                    <option value="">Pilih Menu</option>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}" {{ old('id_menu') == $menu->id ? 'selected' : '' }}>
                            {{ $menu->nama_menu ?? 'Nama Tidak Ada' }} - Rp {{ number_format($menu->harga, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
                @error('id_menu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Jumlah -->
            <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="number" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('jumlah') is-invalid @enderror" id="jumlah"
                    name="jumlah" value="{{ old('jumlah') }}" required min="1">
                @error('jumlah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Status Pesanan -->
            <div class="form-group">
                <label for="status_pesanan">Status Pesanan</label>
                <select class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('status_pesanan') is-invalid @enderror" id="status_pesanan"
                    name="status_pesanan" required>
                    <option value="pending" {{ old('status_pesanan') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ old('status_pesanan') == 'completed' ? 'selected' : '' }}>Completed
                    </option>
                    <option value="canceled" {{ old('status_pesanan') == 'canceled' ? 'selected' : '' }}>Canceled</option>
                </select>
                @error('status_pesanan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class=" my-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>

            <!-- Tombol Kembali -->
            <a href="{{ route('pesanans.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Kembali</a>
        </form>
    </div>
@endsection
