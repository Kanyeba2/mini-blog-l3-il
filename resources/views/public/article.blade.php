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
            <p class="article-lead">Dans cet article, je partage une méthode simple pour progresser régulièrement en Laravel sans s'épuiser.</p>
            <p>Je travaille par cycles courts: une notion, une mise en pratique, un mini bilan. Cette approche m'aide à consolider mes acquis et à garder une base de code propre.</p>
            <p>Rédigé par Sephora KANYEBA.</p>
        </main>
    </div>
@endsection
