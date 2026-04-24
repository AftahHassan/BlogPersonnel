@extends('layouts.public')

@section('content')

    {{-- Retour --}}
    <a href="{{ route('articles.index') }}" class="back-link">
        ← Retour aux articles
    </a>

    <div class="article-show">

        {{-- Image --}}
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}"
                 alt="{{ $article->title }}">
        @endif

        <div class="content">

            {{-- Catégorie --}}
            <span class="badge">{{ $article->category->name }}</span>

            {{-- Titre --}}
            <h1 style="margin: 16px 0 8px; font-size: 1.8rem; color: #0f172a;">
                {{ $article->title }}
            </h1>

            {{-- Date --}}
            <p style="color: #94a3b8; font-size: 0.85rem; margin-bottom: 30px;">
                Publié le {{ $article->created_at->format('d/m/Y') }}
            </p>

            {{-- Séparateur --}}
            <hr style="border: none; border-top: 1px solid #e2e8f0; margin-bottom: 30px;">

            {{-- Contenu --}}
            <div style="line-height: 1.8; color: #334155; font-size: 1rem;">
                {!! nl2br(e($article->content)) !!}
            </div>

        </div>
    </div>

@endsection