@extends('dashboard')

@section('title', 'Recettes - Dashboard')
@section('topbar_title', 'Recettes')

@section('content')
    <div class="panel">
        <div class="panel-header">
            <div class="panel-title">Gestion des recettes cafe</div>
        </div>
        <div class="panel-body">
            <p class="text-muted" style="margin-bottom: 1rem;">Liste des recettes et guides de preparation.</p>
            <div class="actions" style="flex-wrap: wrap;">
                <a href="{{ route('articles.show', ['slug' => 'guide-filtre-v60']) }}" class="btn btn-ghost">Previsualiser une recette</a>
                <a href="{{ route('dashboard.categories') }}" class="btn btn-ghost">Aller aux origines</a>
            </div>
        </div>
    </div>
@endsection
