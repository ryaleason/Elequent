@extends('layouts.app')

@section('title', 'Daftar Pesanan')

@section('content')
<h1 class="text-2xl text-white font-semibold mb-4">Daftar Pesanan</h1>
<a href="{{ route('pesanans.create') }}" class="absolute text-lg py-2 px-4 bg-blue-500 text-white rounded-lg bottom-20 right-20"><i class="fas fa-plus mr-2"></i>Tambah Pesanan</a>
<table class="min-w-full mt-4 bg-gray-700 border rounded-lg overflow-hidden">
    <thead>
        <tr class="bg-purple-900 text-white uppercase text-sm">
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4">Nama Pelanggan</th>
            <th class="py-3 px-4">Nama Menu</th>
            <th class="py-3 px-4">Jumlah</th>
            <th class="py-3 px-4">Total Harga</th>
            <th class="py-3 px-4">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pesanans as $pesanan)
        <tr class="text-white">
            <td class="border border-gray-600  px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pesanan->pelanggan->nama }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pesanan->menu->nama_menu }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pesanan->jumlah }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pesanan->total_harga }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pesanan->status_pesanan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
