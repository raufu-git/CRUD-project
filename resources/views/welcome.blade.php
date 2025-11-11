<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
<style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a2d2ff, #cdb4db);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .card {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 400px;
        }
        h1 {
            margin-bottom: 10px;
            font-size: 26px;
        }
        p {
            margin-bottom: 20px;
            color: #555;
        }
        a {
            display: inline-block;
            background: #0077b6;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.2s;
        }
        a:hover {
            background: #023e8a;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat Datang di Sistem Buku</h1>
        <a href="{{ route('login') }}">Masuk</a>
    </div>
</body>
</html>
