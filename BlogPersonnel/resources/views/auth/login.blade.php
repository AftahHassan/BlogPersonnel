<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — PromptRepo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="splash-body" style="background: #f1f5f9;">
        <div class="form-card">

            <span class="navbar-logo" style="display:block; font-size:1.4rem; font-weight:800; color:#0f172a; margin-bottom:24px; letter-spacing:-0.5px;">
                🚀 Prompt<span style="color:#4f46e5;">Repo</span>
            </span>

            <h1>🔐 Connexion</h1>
            <p style="color:#64748b; font-size:0.92rem; margin-top:-18px; margin-bottom:24px;">
                Accès réservé à l'administrateur
            </p>

            @if (session('status'))
                <div class="alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                           value="{{ old('email') }}" required autofocus
                           placeholder="admin@exemple.com" />
                    @error('email')
                        <div class="alert-error" style="padding:8px 14px; margin-top:6px; font-size:0.82rem;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password"
                           required placeholder="••••••••" />
                    @error('password')
                        <div class="alert-error" style="padding:8px 14px; margin-top:6px; font-size:0.82rem;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn-submit">Se connecter</button>

            </form>

        </div>
    </div>

</body>
</html>