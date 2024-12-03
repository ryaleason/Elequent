@extends('layouts.crudLayout')

@section('title', 'Tambah Menu')

@section('content')
<h1 class="text-2xl text-white font-semibold mb-4">Edit {{ $menu->nama_menu }}</h1>
<form action="{{ route('menus.update', $menu->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="nama_menu" class="block text-gray-700 text-sm font-bold mb-2">Nama Menu</label>
        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="kategori" class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
        <input type="text" name="kategori" value="{{ $menu->kategori }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
        <input type="number" name="harga" value="{{ $menu->harga }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
    <div class="mb-4">
        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
        <select name="status" value="{{ $menu->status }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
</form>
@endsection