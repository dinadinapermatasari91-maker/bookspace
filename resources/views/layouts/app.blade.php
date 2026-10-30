
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BookSpace</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f6f2;
            color: #292929;
        }

        header {
            background: #ffffff;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #8b5e3c;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin-left: 25px;
            font-size: 14px;
        }

        nav a:hover {
            color: #a66b42;
        }

        .container {
            width: 84%;
            margin: 40px auto;
            min-height: 400px;
        }

        .hero {
            background: #ead9c8;
            padding: 65px 50px;
            border-radius: 15px;
            margin-bottom: 35px;
        }

        .hero h1 {
            font-size: 38px;
            margin-bottom: 15px;
            color: #573b29;
        }

        .hero p {
            font-size: 16px;
            line-height: 1.7;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            background: #8b5e3c;
            color: white;
            padding: 12px 22px;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn:hover {
            background: #68432b;
        }

        .section-title {
            margin-bottom: 20px;
            color: #573b29;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 22px;
        }

        .book-card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.06);
        }

        .book-card h3 {
            color: #754b30;
            margin-bottom: 10px;
        }

        .book-card p {
            font-size: 14px;
            line-height: 1.6;
        }

        footer {
            background: #573b29;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">BookSpace.</div>

        <nav>
            <a href="/">Beranda</a>
            <a href="/tentang">Tentang</a>
            <a href="/buku">Daftar Buku</a>
            <a href="/kategori">Kategori</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BookSpace - Katalog Buku Digital</p>
    </footer>

</body>
</html>
