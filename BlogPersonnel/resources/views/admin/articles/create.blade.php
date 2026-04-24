@extends('layouts.app')

@section('content')

    <a href="{{ route('admin.dashboard') }}" class="back-link">← Retour au dashboard</a>

    <div class="form-card">
        <h1>+ Nouvel article</h1>

        @if($errors->any())
            <div class="alert-error">
                @foreach($errors->all() as $error)
                    <p>❌ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Titre de l'article">
            </div>

            <div class="form-group">
                <label>Catégorie</label>
                <select name="category_id">
                    <option value="">-- Choisir une catégorie --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Statut</label>
                <select name="status">
                    <option value="draft"      {{ old('status') == 'draft'      ? 'selected' : '' }}>📝 Brouillon</option>
                    <option value="published"  {{ old('status') == 'published'  ? 'selected' : '' }}>✅ Publié</option>
                </select>
            </div>

            <div class="form-group">
                <label>Contenu</label>
                <textarea name="content" rows="12" placeholder="Écris ton article ici...">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label>Image (optionnel)</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <button type="submit" class="btn-submit">Sauvegarder l'article</button>
        </form>
    </div>

@endsection