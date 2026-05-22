@extends('app')

@section('title', 'Articles - Le Blog')

@section('content')
    <div class="page-header">
        <div class="page-tag">Café</div>
        <h1 class="page-title">Tous les articles café de Sephora KANYEBA</h1>
    </div>

    <div class="articles-list" style="max-width:1000px;margin:0 auto 2rem">
        <a href="{{ route('articles.show', ['slug' => 'guide-filtre-v60']) }}" class="article-item">
            <div>
                <div class="ai-cat">Méthodes</div>
                <div class="ai-title">Guide complet du café filtre V60</div>
            </div>
        </a>

        <a href="{{ route('articles.show', ['slug' => 'espresso-a-la-maison']) }}" class="article-item">
            <div>
                <div class="ai-cat">Extraction</div>
                <div class="ai-title">Réussir son espresso à la maison</div>
            </div>
        </a>

        <a href="{{ route('articles.show', ['slug' => 'origines-et-torrefaction']) }}" class="article-item">
            <div>
                <div class="ai-cat">Culture café</div>
                <div class="ai-title">Comprendre les origines et la torréfaction</div>
            </div>
        </a>
    </div>
@endsection
