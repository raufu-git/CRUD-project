<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
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

    <h1>📚 Data Buku</h1>
    <a href="{{ route('buku.create') }}" class="btn">+ Tambah Buku</a>

    @if(session('success'))
        <p style="color: green; margin-top:10px;">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Pengarang</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @forelse($bukus as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->penerbit }}</td>
            <td>{{ $b->tahun_terbit }}</td>
            <td>{{ $b->pengarang }}</td>
            <td>{{ $b->kategori->name ?? '-'}}</td>
            <td>
                <a href="{{ route('buku.edit', $b->id) }}" class="btn">Edit</a>
                <form action="{{ route('buku.destroy', $b->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">Belum ada data.</td>
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
