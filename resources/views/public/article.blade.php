@extends('app')

@section('title', 'Article - Le Blog')

@section('content')
    <div class="article-hero">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <a href="{{ route('articles.index') }}">Articles</a>
            <span>/</span>
            <a href="{{ route('categories.index') }}">Catégories</a>
            <span>/</span>
            <span>{{ $slug }}</span>
        </div>
        <h1 class="article-title">Article: {{ str_replace('-', ' ', ucfirst($slug)) }}</h1>
    </div>

    <div class="article-layout">
        <main class="article-body">
            <p class="article-lead">Dans cet article, je partage une méthode simple pour préparer un café équilibré, aromatique et régulier au quotidien.</p>
            <p>Je détaille les points qui changent tout: fraîcheur du grain, taille de mouture, ratio eau/café, température et temps d'extraction.</p>
            <p>Avec quelques ajustements progressifs, chaque tasse devient plus claire, plus sucrée et plus agréable.</p>
            <p>Rédigé par Sephora KANYEBA.</p>
        </main>
    </div>
@endsection
