<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #f4f6f8;
}

.container {
    max-width: 1000px;
    margin: 2rem auto;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
}

.navbar {
    background: #007bff;
    color: #fff;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar ul {
    list-style: none;
    display: flex;
    gap: 1rem;
    margin: 0;
}

.navbar ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}

.navbar ul li a:hover {
    text-decoration: underline;
}

.content {
    padding: 2rem;
}

.content h3 {
    color: #333;
    margin-bottom: 0.5rem;
}

.content p {
    color: #555;
}

    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="{{ route('buku.index') }}">📚Data Buku</a></li>
                <li><a href="{{ route('kategori.index') }}">📂Data Kategori</a></li>
                <li><a href="{{ route('harga.index') }}">💸Data Harga</a></li>
                <li><form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="
                        background: #005481ff;
                        color: #ffffffff;
                        font-size: 16px;
                        cursor: pointer;
                    ">
                        Logout
                    </button>
                </form>
                </li>
            </ul>
        </nav>

        <main class="content">
            <h3>Selamat Datang, {{ Auth::user()->name ?? 'User' }}</h3>
            <p>Ini adalah halaman dashboard kamu.</p>
        </main>
    </div>
</body>
</html>
