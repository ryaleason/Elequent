@extends('layouts.app')

@section('title', 'Daftar Pelanggan')

@section('content')
<h1 class="text-2xl text-white font-semibold mb-4">Daftar Pelanggan</h1>
<a href="/pelanggans/create" class="absolute text-lg py-2 px-4 bg-blue-500 text-white rounded-lg bottom-20 right-20"><i class="fas fa-plus mr-2"></i>Tambah Pelanggan</a>
<table class="min-w-full mt-4 bg-gray-700 border rounded-lg overflow-hidden">
    <thead>
        <tr class="bg-purple-900 text-white uppercase text-sm">
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4">Nama</th>
            <th class="py-3 px-4">No HP</th>
            <th class="py-3 px-4">Alamat</th>
            <th class="py-3 px-4">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggans as $pelanggan)
        <tr class="text-white">
            <td class="border border-gray-600 px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pelanggan->nama }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pelanggan->no_hp }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $pelanggan->alamat }}</td>
            <td class="border border-gray-600 py-2 text-center">
                <a href="{{ route('pelanggans.edit', $pelanggan->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></a>
                <form action="{{ route('pelanggans.destroy', $pelanggan->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="button" data-nama="{{ $pelanggan->nama }}" value="" class="delete-button bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
