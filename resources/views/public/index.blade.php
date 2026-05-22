@extends('app')

@section('title', 'Le Blog - Accueil')

@section('content')
    <section class="hero">
        <div>
            <p class="hero-tag">Carnet de Sephora KANYEBA</p>
            <h1 class="hero-title">Pensées utiles, projets concrets, apprentissages réels</h1>
            <p class="hero-desc">Un mini-blog personnel où je partage mon parcours en développement web, mes méthodes de travail et mes retours d'expérience.</p>
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
            <a href="{{ route('articles.show', ['slug' => 'mon-plan-de-progression-laravel']) }}" class="article-card featured">
                <div class="article-cat">Parcours • À la une</div>
                <h2 class="article-title">Mon plan de progression Laravel sur 90 jours</h2>
                <p class="article-excerpt">Objectifs hebdomadaires, mini-projets et bonnes habitudes pour progresser sans se disperser.</p>
            </a>

            <a href="{{ route('articles.show', ['slug' => 'organiser-son-code-blade']) }}" class="article-card">
                <div class="article-cat">Architecture</div>
                <h3 class="article-title">Comment organiser ses vues Blade proprement</h3>
            </a>

            <a href="{{ route('articles.show', ['slug' => 'journal-de-debug']) }}" class="article-card">
                <div class="article-cat">Productivité</div>
                <h3 class="article-title">Journal de debug: ce qui m'a fait gagner du temps</h3>
            </a>
        </div>
    </section>
@endsection
