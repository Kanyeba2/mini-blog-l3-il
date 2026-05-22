@extends('app')

@section('title', 'Le Blog - Accueil')

@section('content')
    <section class="hero">
        <div>
            <p class="hero-tag">Carnet café de Sephora KANYEBA</p>
            <h1 class="hero-title">Arômes intenses, méthodes douces, passion café</h1>
            <p class="hero-desc">Un mini-blog dédié au café: dégustation, préparation à la maison, découverte des origines et astuces pour une tasse mémorable.</p>
        </div>
    </section>

    <section class="section" style="padding-bottom:0">
        <div class="section-header">
            <h2 class="section-title">Catégories</h2>
            <a href="{{ route('categories.index') }}" class="section-link">Voir toutes →</a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Derniers articles</h2>
            <a href="{{ route('articles.index') }}" class="section-link">Voir tout →</a>
        </div>
        <div class="articles-grid">
            <a href="{{ route('articles.show', ['slug' => 'guide-filtre-v60']) }}" class="article-card featured">
                <div class="article-cat">Méthodes • À la une</div>
                <h2 class="article-title">Guide complet du café filtre V60</h2>
                <p class="article-excerpt">Mouture, ratio eau/café, température et technique de versement pour un résultat équilibré.</p>
            </a>

            <a href="{{ route('articles.show', ['slug' => 'espresso-a-la-maison']) }}" class="article-card">
                <div class="article-cat">Extraction</div>
                <h3 class="article-title">Réussir son espresso à la maison</h3>
            </a>

            <a href="{{ route('articles.show', ['slug' => 'origines-et-torrefaction']) }}" class="article-card">
                <div class="article-cat">Culture café</div>
                <h3 class="article-title">Comprendre les origines et la torréfaction</h3>
            </a>
        </div>
    </section>
@endsection
