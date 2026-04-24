@extends('layouts.public')

@section('content')

    <div class="page-header">
        <h1>Articles</h1>
        <p>Tous les articles publiés</p>
    </div>

    {{-- FILTRES --}}
    <div class="filters">
        <a href="{{ route('articles.index') }}"
           class="{{ !request('category') ? 'active' : '' }}">Tous</a>
        @foreach($categories as $cat)
            <a href="{{ route('articles.index', ['category' => $cat->id]) }}"
               class="{{ request('category') == $cat->id ? 'active' : '' }}">
                {{ $cat->name }}
            </a>
        @endforeach
    </div>

    {{-- LISTE --}}
    @if($articles->isEmpty())
        <p style="color: var(--ink-muted); font-family: var(--font-ui);">Aucun article trouvé.</p>
    @else
        <div class="articles-grid">
            @foreach($articles as $article)
                <div class="article-card">

                    <div class="img-wrap">
                        @if($article->image)
                            <img class="card-img"
                                 src="{{ asset('storage/' . $article->image) }}"
                                 alt="{{ $article->title }}">
                        @else
                            <div class="no-image">📄</div>
                        @endif
                    </div>

                    <div class="card-body">
                        <span class="badge">{{ $article->category->name }}</span>

                        <h2 class="card-title">
                            <a href="{{ route('articles.show', $article) }}">
                                {{ $article->title }}
                            </a>
                        </h2>

                        <p class="card-excerpt">{{ Str::limit($article->content, 120) }}</p>

                        <div class="card-footer">
                            <span class="card-date">{{ $article->created_at->format('d/m/Y') }}</span>
                            <a href="{{ route('articles.show', $article) }}" class="card-read">
                                Lire →
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    @endif

@endsection