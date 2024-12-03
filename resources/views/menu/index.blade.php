@extends('layouts.app')

@section('title', 'Daftar Menu')

@section('content')
<h1 class="text-2xl text-white font-semibold mb-4">Daftar Menu</h1>
<a href="/menus/create" class="absolute text-lg py-2 px-4 bg-blue-500 text-white rounded-lg bottom-20 right-20"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
<table class="min-w-full mt-4 bg-gray-700 border rounded-lg overflow-hidden">
    <thead>
        <tr class="bg-purple-900 text-white uppercase text-sm">
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4">Nama Menu</th>
            <th class="py-3 px-4">Kategori</th>
            <th class="py-3 px-4">Harga</th>
            <th class="py-3 px-4">Status</th>
            <th class="py-3 px-4" style="">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $menu)
        <tr class="text-white">
            <td class=" border border-gray-600 px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $menu->nama_menu }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $menu->kategori }}</td>
            <td class="border border-gray-600 px-4 py-2">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
            <td class="border border-gray-600 px-4 py-2">{{ $menu->status }}</td>
            <td class="border border-gray-600 py-2 text-center">
                <a href="{{ route('menus.edit', $menu->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></a>
                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="button" data-nama="{{ $menu->nama_menu }}" value="" class="delete-button bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    
</script>
@endsection