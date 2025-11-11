<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Buku" required>
        <input type="text" name="penerbit" placeholder="Penerbit" required>
        <input type="number" name="tahun_terbit" placeholder="Tahun Terbit" required>
        <input type="text" name="pengarang" placeholder="Pengarang" required>
        <select name="kategori_id" id="kategori">
            <option value="">--Pilih Kategori--</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn">Simpan</button>
    </form>

    <br>
    <a href="{{ route('buku.index') }}" class="btn btn-danger">Kembali</a>
</div>
</body>
</html>
