<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-900">
    <nav class="bg-purple-800 shadow">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a class="text-xl font-bold text-white" href="/">Aplikasi Pemesanan Makanan</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-9 py-8">
        @yield('content')
    </div>
    <script>
        // SweetAlert example
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
                Swal.fire({
                    icon: "error",
                    title: "Gagal !!",
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 3000
                });
        @endif
    </script>
</body>
</html>