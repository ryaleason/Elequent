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
                <div class="flex space-x-6">
                    <a class="text-gray-200 duration-300 transform hover:text-white hover:scale-110 hover:rotate-6"
                        href="/menus">Menu</a>
                    <a class="text-gray-200 duration-300 transform hover:text-white hover:scale-110 hover:rotate-6"
                        href="/pelanggans">Pelanggan</a>
                    <a class="text-gray-200 duration-300 transform hover:text-white hover:scale-110 hover:rotate-6"
                        href="/pesanans">Pesanan</a>
                </div>
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
                timer: 1500
            });
        @elseif (session('error'))
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                });
        @endif

        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah form submit langsung

                const form = this.closest('form'); // Ambil form terkait
                const namaMenu = this.getAttribute('data-nama'); // Ambil nama menu dari atribut data-nama

                Swal.fire({
                    title: `Apakah Anda yakin ingin menghapus ${namaMenu}?`,
                    text: "Data yang dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form jika konfirmasi "Ya"
                    }
                });
            });
        });
    </script>
</body>

</html>
