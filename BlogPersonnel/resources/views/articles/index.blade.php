@extends('layouts.public')

@section('content')

    {{-- HEADER --}}
    <div class="page-header">
        <h1>📝 Articles</h1>
        <p>Tous les articles publiés</p>
    </div>

    {{-- FILTRES CATÉGORIES --}}
    <div class="filters">
        <a href="{{ route('articles.index') }}"
           class="{{ !request('category') ? 'active' : '' }}">
            Tous
        </a>
        @foreach($categories as $cat)
            <a href="{{ route('articles.index', ['category' => $cat->id]) }}"
               class="{{ request('category') == $cat->id ? 'active' : '' }}">
                {{ $cat->name }}
            </a>
        @endforeach
    </div>

    {{-- LISTE DES ARTICLES --}}
    @if($articles->isEmpty())
        <p style="color: #94a3b8;">Aucun article trouvé.</p>
    @else
        <div class="articles-grid">
            @foreach($articles as $article)
                <div class="article-card">

                    {{-- Image --}}
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}"
                             alt="{{ $article->title }}">
                    @else
                        <div class="no-image">📄 Pas d'image</div>
                    @endif

                    <div class="card-body">

                        {{-- Catégorie --}}
                        <span class="badge">{{ $article->category->name }}</span>

                        {{-- Titre --}}
                        <h2>
                            <a href="{{ route('articles.show', $article) }}">
                                {{ $article->title }}
                            </a>
                        </h2>

                        {{-- Extrait --}}
                        <p>{{ Str::limit($article->content, 100) }}</p>

                        {{-- Date + Lire --}}
                        <div class="card-footer">
                            <span class="date">
                                {{ $article->created_at->format('d/m/Y') }}
                            </span>
                            <a href="{{ route('articles.show', $article) }}">
                                Lire →
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    @endif

@endsection