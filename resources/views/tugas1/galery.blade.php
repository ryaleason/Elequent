@extends('index')
@section('content')
    <h1 class="font-bold text-2xl mb-3 text-red-300 flex items-center justify-center mt-10">Galery</h1>
    <div class="w-full flex justify-center mt-2">



        <div class="grid grid-cols-2 gap-2">
            @foreach ($link as $a)
                <div class="w-60 h-55">
                    <img src="{{ $a }}" alt="" srcset="" class="rounded-lg object-cover h-full w-full">
                </div>
            @endforeach
        </div>
    </div>
@endsection
