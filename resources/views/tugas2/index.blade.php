<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-6">
        <h1 class="text-center text-4xl font-bold text-blue-700 mb-10">Data Siswa</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($data as $n)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all hover:shadow-xl hover:scale-105">
                    <div class="flex items-center justify-center h-24 bg-blue-500 text-white font-bold text-3xl">
                        {{ substr($n, 0, 1) }}
                    </div>
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $n }}</h2>
                        <span class="bg-green-100 text-green-600 text-sm font-medium py-1 px-3 rounded-full">Islam</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>