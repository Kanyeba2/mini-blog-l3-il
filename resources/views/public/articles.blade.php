@extends('app')

@section('title', 'Articles - Le Blog')

@section('content')
    <div class="page-header">
        <div class="page-tag">Blog</div>
        <h1 class="page-title">Tous les articles de Sephora KANYEBA</h1>
    </div>

    <div class="articles-list" style="max-width:1000px;margin:0 auto 2rem">
        <a href="{{ route('articles.show', ['slug' => 'mon-plan-de-progression-laravel']) }}" class="article-item">
            <div>
                <div class="ai-cat">Parcours</div>
                <div class="ai-title">Mon plan de progression Laravel sur 90 jours</div>
            </div>
        </a>

        <a href="{{ route('articles.show', ['slug' => 'organiser-son-code-blade']) }}" class="article-item">
            <div>
                <div class="ai-cat">Architecture</div>
                <div class="ai-title">Comment organiser ses vues Blade proprement</div>
            </div>
        </a>

        <a href="{{ route('articles.show', ['slug' => 'journal-de-debug']) }}" class="article-item">
            <div>
                <div class="ai-cat">Productivité</div>
                <div class="ai-title">Journal de debug: ce qui m'a fait gagner du temps</div>
            </div>
        </a>
    </div>
@endsection
