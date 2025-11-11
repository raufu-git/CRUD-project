<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Edit Data Buku</h1>

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $buku->name }}" placeholder="Nama Buku" required>
        <input type="text" name="penerbit" value="{{ $buku->penerbit }}" placeholder="Penerbit" required>
        <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" placeholder="Tahun Terbit" required>
        <input type="text" name="pengarang" value="{{ $buku->pengarang }}" placeholder="Pengarang" required>
        <select name="kategori_id" id="kategori">
            <option value="">--Pilih Kategori--</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn">Update</button>
    </form>

    <br>
    <a href="{{ route('buku.index') }}" class="btn btn-danger">Kembali</a>
</div>
</body>
</html>
