<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — BlogPersonnel</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 420px;
        }
        .login-box h1 {
            font-size: 1.6rem;
            color: #0f172a;
            margin-bottom: 6px;
        }
        .login-box p {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 28px;
        }
        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 6px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            margin-bottom: 18px;
            outline: none;
            transition: border 0.2s;
        }
        input:focus { border-color: #f97316; }
        .btn {
            width: 100%;
            padding: 12px;
            background: #f97316;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn:hover { background: #ea6c0a; }
        .error {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: -12px;
            margin-bottom: 12px;
        }
        .logo {
            font-size: 1.3rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 24px;
            display: block;
        }
        .logo span { color: #f97316; }
    </style>
</head>
<body>

    <div class="login-box">

        <span class="logo">Blog<span>Personnel</span></span>
        <h1>🔐 Connexion</h1>
        <p>Accès réservé à l'administrateur</p>

        {{-- Session Status --}}
        @if (session('status'))
            <div style="color: green; margin-bottom: 16px; font-size: 0.9rem;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email') }}" required autofocus />
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Password --}}
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required />
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn">Se connecter</button>

        </form>

    </div>

</body>
</html>