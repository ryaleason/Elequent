@extends('layouts.crudLayout')

@section('title', 'Tambah pelanggan')

@section('content')
<h1 class="text-2xl text-white font-semibold mb-4">Edit {{ $pelanggan->nama }}</h1>
<form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="nama_pelanggan" class="block text-gray-700 text-sm font-bold mb-2">Nama pelanggan</label>
        <input type="text" name="nama"  value="{{ $pelanggan->nama }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="kategori" class="block text-gray-700 text-sm font-bold mb-2">No HP</label>
        <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
        <input type="text" name="alamat" value="{{ $pelanggan->alamat }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
</form>
@endsection