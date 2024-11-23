<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-center mb-4">Silahkan Login</h1>

        @if(session('loginError'))
            <div class="mb-4 text-red-600 text-center font-medium">
                <strong>{{ session('loginError') }}</strong>
            </div>
        @endif

        <form action="{{ url('login') }}" method="POST" accept-charset="utf-8">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-medium mb-2">Username:</label>
                <input 
                    type="text" 
                    name="username" 
                    id="username" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan username">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password:</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan password">
            </div>
            <div>
                <input 
                    type="submit" 
                    name="btn_simpan" 
                    value="Login" 
                    class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
