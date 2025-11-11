<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
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

    <h1>📂 Data Kategori</h1>
    <a href="{{ route('kategori.create') }}" class="btn">+ Tambah Kategori</a>

    @if(session('success'))
        <p style="color: green; margin-top:10px;">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>#</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        @forelse($kategoris as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->name }}</td>
            <td>
                <a href="{{ route('kategori.edit', $k->id) }}" class="btn">Edit</a>
                <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">Belum ada data.</td>
        </tr>
        @endforelse
    </table>
</div>
<script>
  // pastikan elemen dengan id "burger" dan "menu" memang ada di DOM
  const burger = document.getElementById('burger');
  const menu   = document.getElementById('menu');

  if (burger && menu) {
    burger.addEventListener('click', () => {
      menu.classList.toggle('show'); // <-- pake 'show' sesuai CSS
    });
  } else {
    console.warn('Burger or menu element not found. Check IDs.');
  }
</script>

</body>
</html>
