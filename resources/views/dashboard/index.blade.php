@extends('dashboard')

@section('title', 'Dashboard - Le Blog')
@section('topbar_title', 'Dashboard')

@section('content')
    <div class="panel">
        <div class="panel-header">
            <div class="panel-title">Tableau de bord</div>
        </div>

        <div class="panel-body">
            <p class="text-muted" style="margin-bottom: 1rem;">Bienvenue dans l'administration.</p>

            <div class="actions" style="flex-wrap: wrap;">
                <a href="{{ route('dashboard.articles') }}" class="btn btn-ghost">Gérer les articles</a>
                <a href="{{ route('dashboard.categories') }}" class="btn btn-ghost">Gérer les catégories</a>
                <a href="{{ route('dashboard.users') }}" class="btn btn-ghost">Gérer les utilisateurs</a>
                <a href="{{ route('dashboard.comments') }}" class="btn btn-ghost">Gérer les commentaires</a>
                <a href="{{ route('dashboard.settings') }}" class="btn btn-ghost">Réglages</a>
            </div>
        </div>
    </div>
@endsection
