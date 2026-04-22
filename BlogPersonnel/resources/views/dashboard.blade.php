@extends('layouts.app')

@section('content')

    <h1 style="margin-bottom: 5px;">⚙️ Dashboard Admin</h1>
    <p style="color: #64748b; margin-bottom: 30px;">
        Bienvenue, {{ auth()->user()->name }} 👋
    </p>

    {{-- STATS --}}
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 40px;">

        <div style="background: white; border-radius: 12px; padding: 24px;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.08); border-left: 4px solid #f97316;">
            <p style="color: #94a3b8; font-size: 0.85rem;">Total articles</p>
            <h2 style="font-size: 2rem; color: #0f172a;">0</h2>
        </div>

        <div style="background: white; border-radius: 12px; padding: 24px;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.08); border-left: 4px solid #22c55e;">
            <p style="color: #94a3b8; font-size: 0.85rem;">Publiés</p>
            <h2 style="font-size: 2rem; color: #0f172a;">0</h2>
        </div>

        <div style="background: white; border-radius: 12px; padding: 24px;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.08); border-left: 4px solid #94a3b8;">
            <p style="color: #94a3b8; font-size: 0.85rem;">Brouillons</p>
            <h2 style="font-size: 2rem; color: #0f172a;">0</h2>
        </div>

    </div>

    {{-- BOUTON CRÉER --}}
    <div style="margin-bottom: 20px;">
        <a href="#" style="background: #f97316; color: white; padding: 10px 20px;
                           border-radius: 8px; text-decoration: none; font-size: 0.9rem;">
            + Nouvel article
        </a>
    </div>

    {{-- TABLE ARTICLES --}}
    <div style="background: white; border-radius: 12px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.08); overflow: hidden;">

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                    <th style="padding: 14px 20px; text-align: left; font-size: 0.85rem; color: #64748b;">Titre</th>
                    <th style="padding: 14px 20px; text-align: left; font-size: 0.85rem; color: #64748b;">Catégorie</th>
                    <th style="padding: 14px 20px; text-align: left; font-size: 0.85rem; color: #64748b;">Statut</th>
                    <th style="padding: 14px 20px; text-align: left; font-size: 0.85rem; color: #64748b;">Date</th>
                    <th style="padding: 14px 20px; text-align: left; font-size: 0.85rem; color: #64748b;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" style="padding: 40px; text-align: center; color: #94a3b8;">
                        Aucun article pour l'instant.
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection