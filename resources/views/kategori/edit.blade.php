<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Edit Data Kategori</h1>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $kategori->name }}" placeholder="Nama kategori" required>
        <button type="submit" class="btn">Update</button>
    </form>

    <br>
    <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
</div>
</body>
</html>
