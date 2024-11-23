<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <form action="{{ url('anggota/save') }}" method="POST" accept-charset="utf-8">
    @csrf
        <input type="hidden" name="id" value=""/>
        <input type="hidden" name="is_update" value="{{ $is_update }}" />
        NIM : <input type="text" name="nim" value="{{ old('nim') }}" size='50' maxlength="100" />
        <br><br>Nama : <input type="text" name="nama" value="{{ old('nama') }}" size='50' maxlength='150'/>
        <br><br>Progdi : <select name="progdi">
            @foreach ($optprogdi as $key => $value)
                @if (old('progdi') == $key)
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