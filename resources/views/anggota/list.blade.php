<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Daftar Anggota</h1>
            <a 
                href="{{ url('anggota/add') }}" 
                class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-all duration-300">
                Tambah Anggota
            </a>
        </div>
        <table class="w-full border border-gray-300 text-left rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300">No.</th>
                    <th class="px-4 py-2 border-b border-gray-300">NIM</th>
                    <th class="px-4 py-2 border-b border-gray-300">NAMA</th>
                    <th class="px-4 py-2 border-b border-gray-300">Progdi</th>
                    <th class="px-4 py-2 border-b border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 0; @endphp
                @foreach($query as $row)
                    @php $no++; @endphp
                    <tr class="even:bg-gray-100 hover:bg-gray-50">
                        <td class="px-4 py-2 border-b border-gray-300">{{ $no }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $row->nim }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $row->nama }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">
                            {{ isset($optprogdi[$row->progdi]) ? $optprogdi[$row->progdi] : 'Progdi Tidak Dikenal' }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300">
                            <a 
                                href="{{ url('anggota/edit/'.$row->ID_Anggota) }}" 
                                class="text-blue-500 hover:underline mr-4">
                                Edit
                            </a>
                            <a 
                                href="{{ url('anggota/delete/'.$row->ID_Anggota) }}" 
                                class="text-red-500 hover:underline"
                                onclick="return confirm('Yakin?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-6">
            <p class="text-gray-600 text-sm">{{ $query->links('vendor.pagination.mypage') }}</p>
        </div>
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
