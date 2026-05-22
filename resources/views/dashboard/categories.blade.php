@extends('dashboard')

@section('title', 'Catégories - Dashboard')
@section('topbar_title', 'Catégories')

@section('content')
    <div class="panel">
        <div class="panel-header">
            <div class="panel-title">Gestion des catégories</div>
        </div>
        <div class="panel-body">
            <p class="text-muted" style="margin-bottom: 1rem;">Administration des catégories du blog.</p>
            <a href="{{ route('categories.index') }}" class="btn btn-ghost">Voir la page publique des catégories</a>
        </div>
    </div>
@endsection
