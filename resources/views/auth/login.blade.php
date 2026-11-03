<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Perpustakaan</title>
    </head>

    <body>

    <h1>Login Sistem Perpustakaan</h1>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{route('login.submit')}}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label><br>
            <input 
                type="email"
                name="email"
                id="email"
                placeholder="Email"
                value="{{ old('email') }}"
                required>
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <div>
            <label for="password">Password</label><br>
            <input 
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                required>
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <button type="submit">Login</button>
    </form>
    </body>


</html>