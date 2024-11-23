<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
</head>
<body>
    <form action="{{ url('anggota/save') }}" method="POST" accept-charset="utf-8">
    @csrf
        <input type="hidden" name="id" value="{{ $query->ID_Anggota }}"/>
        <input type="hidden" name="is_update" value="{{ $is_update }}" />
        NIM : <input type="text" name="nim" value="{{ $query->nim }}" size='50' maxlength="100" />
        <br><br>Nama : <input type="text" name="nama" value="{{ $query->nama }}" size='50' maxlength='150'/>
        <br><br>Progdi : <select name="progdi">
            @foreach ($optprogdi as $key => $value)
                @if ($query->progdi == $key)
                <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        </select>
        <br><br><input type="submit" name="btn_simpan" value="Simpan">
    </form>
    <br><a href="{{ url('anggota') }}">Kembali</a>
</body>
</html>