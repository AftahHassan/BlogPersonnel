@extends('layouts.public')

@section('content')

    <a href="{{ route('articles.index') }}" class="back-link">← Retour aux articles</a>

    <div class="article-show">

        @if($article->image)
            <div class="show-img-wrap">
                <img class="show-img"
                     src="{{ asset('storage/' . $article->image) }}"
                     alt="{{ $article->title }}">
            </div>
        @endif

        <div class="show-content">

            <span class="show-category">{{ $article->category->name }}</span>

            <h1>{{ $article->title }}</h1>

            <div class="show-meta">
                <span class="show-date">Publié le {{ $article->created_at->format('d M Y') }}</span>
            </div>

            <div class="show-body">
                {!! nl2br(e($article->content)) !!}
            </div>

        </div>
    </div>

@endsection