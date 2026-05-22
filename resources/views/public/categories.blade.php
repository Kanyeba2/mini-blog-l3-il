@extends('app')

@section('title', 'Catégories - Le Blog')

@section('content')
    <div class="page-header">
        <div class="page-tag">Explorer</div>
        <h1 class="page-title">Catégories éditoriales</h1>
    </div>

    <div class="cats-content" style="max-width:1000px;margin:0 auto 2rem">
        <div class="cat-section">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-name">Parcours développeur</div>
                    <a href="{{ route('articles.index') }}" class="cs-link">Voir tous les articles →</a>
                </div>
            </div>
        </div>

        <div class="cat-section">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-name">Architecture & bonnes pratiques</div>
                    <a href="{{ route('articles.index') }}" class="cs-link">Voir tous les articles →</a>
                </div>
            </div>
        </div>
    </div>
@endsection
