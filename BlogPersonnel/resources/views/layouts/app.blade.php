<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogPersonnel — Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f8fafc; color: #1e293b; }

        nav {
            background: #0f172a;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo { font-size: 1.4rem; font-weight: 800; color: white; text-decoration: none; }
        nav .logo span { color: #f97316; }
        nav .links { display: flex; gap: 20px; align-items: center; }
        nav .links a { color: #94a3b8; text-decoration: none; font-size: 0.9rem; }
        nav .links a:hover { color: #f97316; }

        nav .links form button {
            background: none;
            border: 1px solid #f97316;
            color: #f97316;
            padding: 6px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
        }
        nav .links form button:hover { background: #f97316; color: white; }

        .container { max-width: 1100px; margin: 40px auto; padding: 0 20px; }
        footer { text-align: center; padding: 20px; color: #94a3b8; font-size: 0.8rem; margin-top: 60px; border-top: 1px solid #e2e8f0; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="logo">Blog<span>Personnel</span></a>
        <div class="links">
            <a href="{{ route('articles.index') }}">📝 Articles</a>
            <a href="{{ route('admin.dashboard') }}">⚙️ Dashboard</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">🚪 Déconnexion</button>
            </form>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>BlogPersonnel © 2026 · Admin</footer>

</body>
</html>