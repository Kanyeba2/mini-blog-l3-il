@extends('dashboard')

@section('title', 'Origines - Dashboard')
@section('topbar_title', 'Origines')

@section('content')
    <div class="panel">
        <div class="panel-header">
            <div class="panel-title">Gestion des origines de cafe</div>
        </div>
        <div class="panel-body">
            <p class="text-muted" style="margin-bottom: 1rem;">Administration des pays, terroirs et profils aromatiques.</p>
            <a href="{{ route('categories.index') }}" class="btn btn-ghost">Voir la page publique des origines</a>
        </div>
    </div>
@endsection
