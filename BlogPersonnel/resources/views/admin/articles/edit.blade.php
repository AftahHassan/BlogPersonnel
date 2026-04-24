@extends('layouts.app')

@section('content')

    <a href="{{ route('admin.dashboard') }}" class="back-link">← Retour au dashboard</a>

    <div class="form-card">
        <h1>✏️ Modifier l'article</h1>

        @if($errors->any())
            <div class="alert-error">
                @foreach($errors->all() as $error)
                    <p>❌ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" value="{{ old('title', $article->title) }}">
            </div>

            <div class="form-group">
                <label>Catégorie</label>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Statut</label>
                <select name="status">
                    <option value="draft"     {{ old('status', $article->status) == 'draft'     ? 'selected' : '' }}>📝 Brouillon</option>
                    <option value="published" {{ old('status', $article->status) == 'published' ? 'selected' : '' }}>✅ Publié</option>
                </select>
            </div>

            <div class="form-group">
                <label>Contenu</label>
                <textarea name="content" rows="12">{{ old('content', $article->content) }}</textarea>
            </div>

            @if($article->image)
                <div class="form-group">
                    <label>Image actuelle</label>
                    <img src="{{ asset('storage/' . $article->image) }}" class="form-img-preview">
                </div>
            @endif

            <div class="form-group">
                <label>Changer l'image (optionnel)</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <button type="submit" class="btn-submit">Mettre à jour</button>
        </form>
    </div>

@endsection