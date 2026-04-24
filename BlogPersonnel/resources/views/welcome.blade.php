<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogPersonnel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="splash-body">

    {{-- PAS DE NAVBAR ici --}}

    {{-- Logo --}}
    <div class="splash-logo">Blog<span>Personnel</span></div>

    {{-- Tagline --}}
    <p class="splash-tagline">Partage de connaissances & réflexions</p>

    {{-- Loading Bar --}}
    <div class="splash-bar-container">
        <div class="splash-bar"></div>
    </div>

    {{-- Status --}}
    <p class="splash-status" id="status">Chargement...</p>

    {{-- Version --}}
    <p class="splash-version">Laravel v13 · BlogPersonnel © 2026</p>

    <script>
        setTimeout(() => {
            document.getElementById('status').textContent = 'Prêt !';
            setTimeout(() => {
                // Toujours vers articles
                window.location.href = "{{ route('articles.index') }}";
            }, 500);
        }, 2500);
    </script>

</body>
</html>