<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Tambah Kategori Baru</h1>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Kategori" required>
        <button type="submit" class="btn">Simpan</button>
    </form>

    <br>
    <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
</div>
</body>
</html>
