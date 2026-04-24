<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogPersonnel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-inner">
            <a href="{{ route('home') }}" class="logo">Blog<span>Personnel</span></a>
            <div class="nav-links">
                <a href="{{ route('articles.index') }}">Articles</a>
                <a href="{{ route('login') }}" class="btn-login">🔐 Connexion</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>BlogPersonnel © 2026 · Fait avec Laravel</footer>

</body>
</html>