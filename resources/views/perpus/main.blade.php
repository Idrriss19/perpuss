<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan FTIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-blue-600">Aplikasi Perpustakaan</h2>
        <p class="text-lg font-semibold mb-4">Pilihan Menu:</p>
        <ol class="list-decimal list-inside space-y-4 pl-4">
            <li>
                <a 
                    href="{{ url('buku') }}" 
                    class="text-blue-500 hover:text-blue-700 transition-colors duration-300">
                    Kelola Data Buku
                </a>
            </li>
            <li>
                <a 
                    href="{{ url('anggota') }}" 
                    class="text-blue-500 hover:text-blue-700 transition-colors duration-300">
                    Kelola Data Anggota
                </a>
            </li>
            <li>
                <a 
                    href="{{ url('pinjam') }}" 
                    class="text-blue-500 hover:text-blue-700 transition-colors duration-300">
                    Kelola Transaksi Pinjam
                </a>
            </li>
        </ol>
        <form action="{{ url('logout') }}" method="POST" class="mt-8 flex justify-center">
            @csrf
            <button 
                type="submit" 
                class="bg-red-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition-all duration-300">
                Logout
            </button>
        </form>
    </div>
</body>
</html>
