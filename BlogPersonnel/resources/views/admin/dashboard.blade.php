@extends('layouts.app')

@section('content')

    <div class="dashboard-header">
        <h1>⚙️ Dashboard Admin</h1>
        <p>Bienvenue, {{ auth()->user()->name }} 👋</p>
    </div>

    @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    {{-- STATS --}}
    <div class="stats-grid">
        <div class="stat-card orange">
            <p class="stat-label">Total articles</p>
            <h2 class="stat-value">{{ $total }}</h2>
        </div>
        <div class="stat-card green">
            <p class="stat-label">Publiés</p>
            <h2 class="stat-value">{{ $published }}</h2>
        </div>
        <div class="stat-card gray">
            <p class="stat-label">Brouillons</p>
            <h2 class="stat-value">{{ $drafts }}</h2>
        </div>
    </div>

    <a href="{{ route('admin.articles.create') }}" class="btn-create">+ Nouvel article</a>

    {{-- TABLE --}}
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Statut</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $article)
                    <tr>
                        <td class="td-title">{{ $article->title }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>
                            @if($article->status === 'published')
                                <span class="badge-published">✅ Publié</span>
                            @else
                                <span class="badge-draft">📝 Brouillon</span>
                            @endif
                        </td>
                        <td>{{ $article->created_at->format('d/m/Y') }}</td>
                        <td>
                            <div class="action-btns">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="btn-edit">✏️ Modifier</a>
                                <form action="{{ route('admin.articles.destroy', $article) }}"
                                      method="POST"
                                      onsubmit="return confirm('Supprimer cet article ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">🗑️ Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="table-empty">Aucun article. Créez votre premier article !</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection