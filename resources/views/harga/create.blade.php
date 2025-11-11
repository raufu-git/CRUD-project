<!DOCTYPE html>
<html>
<head>
    <title>Tambah Harga Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Tambah Harga Buku Baru</h1>

    <form action="{{ route('harga.store') }}" method="POST">
        @csrf
        <select name="buku_id" id="buku" required>
            <option value="">--Pilih Buku--</option>
            @foreach($bukus as $buku)
                <option value="{{ $buku->id }}">{{ $buku->name }}</option>
            @endforeach
        </select>
        <input type="number" name="harga" placeholder="Masukan Harga..." step="0.01" required>
        <button type="submit" class="btn">Simpan</button>
    </form>

    <br>
    <a href="{{ route('harga.index') }}" class="btn btn-danger">Kembali</a>
</div>
</body>
</html>
