@extends('layouts.crudLayout')


@section('content')
<div class="container">
    <h2 class="text-2xl text-white font-semibold mb-4">Tambah Pelanggan Baru</h2>

    <form action="{{ route('pelanggans.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="no_hp">Nomor HP</label>
            <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
            @error('no_hp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="alamat">Alamat</label>
            <textarea class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
        <a href="{{ route('pelanggans.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Kembali</a>
    </form>
</div>
@endsection
