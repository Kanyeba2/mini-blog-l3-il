@extends('dashboard')

@section('title', 'Articles - Dashboard')
@section('topbar_title', 'Articles')

@section('content')
    <div class="panel">
        <div class="panel-header">
            <div class="panel-title">Gestion des articles</div>
        </div>
        <div class="panel-body">
            <p class="text-muted" style="margin-bottom: 1rem;">Liste des articles côté administration.</p>
            <div class="actions" style="flex-wrap: wrap;">
                <a href="{{ route('articles.show', ['slug' => 'excepturi-eligendi']) }}" class="btn btn-ghost">Prévisualiser un article</a>
                <a href="{{ route('dashboard.categories') }}" class="btn btn-ghost">Aller aux catégories</a>
            </div>
        </div>
    </div>
@endsection
