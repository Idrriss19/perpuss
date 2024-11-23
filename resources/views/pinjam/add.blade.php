<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Form Pinjam Buku</h2>
        
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
                <ul class="list-disc pl-6">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <form action="{{ url('pinjam/save') }}" method="POST" accept-charset="utf-8" class="space-y-4">
            @csrf
            <div>
                <label for="ID_Anggota" class="block text-gray-700 font-medium">Anggota:</label>
                <select 
                    name="ID_Anggota" 
                    id="ID_Anggota" 
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="">- Pilih Anggota -</option>
                    @foreach ($optanggota as $key => $value)
                        <option value="{{ $key }}" {{ old('ID_Anggota') == $key ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="ID_Buku" class="block text-gray-700 font-medium">Buku:</label>
                <select 
                    name="ID_Buku" 
                    id="ID_Buku" 
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <option value="">- Pilih Buku -</option>
                    @foreach ($optbuku as $key => $value)
                        <option value="{{ $key }}" {{ old('ID_Buku') == $key ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="tgl_pinjam" class="block text-gray-700 font-medium">TGL. Pinjam:</label>
                <input 
                    type="date" 
                    name="tgl_pinjam" 
                    id="tgl_pinjam" 
                    value="{{ old('tgl_pinjam') }}" 
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label for="tgl_kembali" class="block text-gray-700 font-medium">TGL. Kembali:</label>
                <input 
                    type="date" 
                    name="tgl_kembali" 
                    id="tgl_kembali" 
                    value="{{ old('tgl_kembali') }}" 
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="flex justify-between">
                <button 
                    type="submit" 
                    name="btn_simpan" 
                    class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-all duration-300">
                    Simpan
                </button>
                <button 
                    type="reset" 
                    name="btn_batal" 
                    class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg shadow-md hover:bg-gray-400 transition-all duration-300">
                    Batal
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a 
                href="{{ url('perpus') }}" 
                class="text-blue-500 hover:underline font-medium">
                Kembali
            </a>
        </div>
    </div>
</body>
</html>
