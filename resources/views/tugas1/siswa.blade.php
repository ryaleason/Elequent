@extends('index')

@section('title', 'Data Siswa')

@section('content')
<div class="w-full h-screen flex items-center flex-col">
    <h1 class="font-bold text-3xl mb-5 text-blue-500">Data Siswa</h1>
    <table class="table-auto border-collapse border border-gray-400 w-3/4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-400 px-4 py-2">Nama</th>
                <th class="border border-gray-400 px-4 py-2">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $siswa)
            <tr>
                <td class="border border-gray-400 px-4 py-2 text-center">{{ $siswa['nama'] }}</td>
                <td class="border border-gray-400 px-4 py-2 text-center">{{ $siswa['nilai'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
