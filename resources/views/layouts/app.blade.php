<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <title>
        @yield('title')
    </title>
</head>

<body>

    <header>
        <h1>Library System Dashboard</h1>
        <p>Selamat datang di Sistem Informasi Perpustakaan.</p>
        <nav>
            <a href="/books">Books</a> |
            <a href="/categories">Categories</a> |
            <a href="/members">Members</a>
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; Rizu's Library System</p>
    </footer>

</body>
</html>