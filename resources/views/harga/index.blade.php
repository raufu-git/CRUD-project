<!DOCTYPE html>
<html>
<head>
    <title>Data Harga Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <div class="burger" id="burger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="menu"id="menu">
        <a href="{{ route('dashboard') }}">🏠Dashboard</a>
        <a href="{{ route('buku.index') }}">📚Data Buku</a>
        <a href="{{ route('kategori.index') }}">📂Data Kategori</a>
        <a href="{{ route('harga.index') }}">💸Data Harga</a>
    </div>

    <h1>💸 Data Harga Buku</h1>
    <a href="{{ route('harga.create') }}" class="btn">+ Tambah Harga Buku</a>

    @if(session('success'))
        <p style="color: green; margin-top:10px;">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>#</th>
            <th>Judul Buku</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @forelse($hargas as $h)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $h->buku->name ?? '-' }}</td>
            <td>{{ number_format($h->harga, 0, ',' ,',') }}</td>
            <td>
                <a href="{{ route('harga.edit', $h->id) }}" class="btn">Edit</a>
                <form action="{{ route('harga.destroy', $h->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        @endforelse
    </table>
</div>
<script>
    const burger = document.getElementById('burger');
    const menu = document.getElementById('menu');

    if(burger && menu){
    burger.addEventListener('click', () => {
        menu.classList.toggle('show');
    });}
</script>
</body>
</html>
