@extends('dashboard')

@section('title', 'Tableau cafe - Le Blog')
@section('topbar_title', 'Tableau cafe')

@section('content')
    <div class="panel">
        <div class="panel-header">
            <div class="panel-title">Tableau de bord cafe</div>
        </div>

        <div class="panel-body">
            <p class="text-muted" style="margin-bottom: 1rem;">Bienvenue dans l'atelier de gestion du cafe.</p>

            <div class="actions" style="flex-wrap: wrap;">
                <a href="{{ route('dashboard.articles') }}" class="btn btn-ghost">Gerer les recettes</a>
                <a href="{{ route('dashboard.categories') }}" class="btn btn-ghost">Gerer les origines</a>
                <a href="{{ route('dashboard.users') }}" class="btn btn-ghost">Gerer les baristas</a>
                <a href="{{ route('dashboard.comments') }}" class="btn btn-ghost">Gerer les notes de degustation</a>
                <a href="{{ route('dashboard.settings') }}" class="btn btn-ghost">Reglages atelier</a>
            </div>
        </div>
    </div>
@endsection
