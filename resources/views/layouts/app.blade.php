<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Library System')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a> |
            <a href="{{ route('categories.index') }}">Categories</a> |
            <a href="{{ route('books.index') }}">Books</a> |
            <a href="{{ route('borrowings.index') }}">Borrowings</a>
            @if (in_array(auth()->user()?->role, ['admin', 'petugas'], true))
                | <a href="{{ route('members.index') }}">Members</a>
            @endif
            @if (auth()->user()?->role === 'admin')
                | <a href="{{ route('users.index') }}">Users</a>
            @endif
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>© Rizu's Library System</p>
    </footer>
</body>
</html>