@extends('index')

@section('title', 'Dashboard Guru')

@section('content')
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #ffc0cb !important;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff !important;
        }
    </style>

    <div class="w-full h-screen flex mt-10 items-center flex-col">
        <h1 class="font-bold text-2xl mb-3 text-red-300">Data Guru</h1>
        <table class="table table-bordered table-striped w-1/2">
            <thead class="text-center font-bold text-xl">
                <td class="text-red-300">Nama Guru</td>
                <td class="text-red-300">Mapel</td>
            </thead>
            <tbody>
                @foreach ($data as $n)
                    <tr class="text-center">
                        <td>{{ $n['nama'] }}</td>
                        <td>{{ $n['mapel'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
