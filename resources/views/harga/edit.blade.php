<!DOCTYPE html>
<html>
<head>
    <title>Edit Harga Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Edit Harga Buku Baru</h1>

    <form action="{{ route('harga.update', $harga->id) }}" method="POST">
        @csrf
        @method('PUT')
        <select name="buku_id" id="buku_id" required>
            <option value="">--Pilih Buku--</option>
            @foreach($bukus as $buku)
                <option value="{{ $buku->id }}" >{{ $buku->name }}</option>
            @endforeach
        </select>
        <input type="number" name="harga_buku" placeholder="Masukan Harga..." step="0.01" required>
        <button type="submit" class="btn">Simpan</button>
    </form>

    <br>
    <a href="{{ route('harga.index') }}" class="btn btn-danger">Kembali</a>
</div>
</body>
</html>
