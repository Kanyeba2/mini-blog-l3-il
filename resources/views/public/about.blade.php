@extends('app')

@section('title', 'À propos - Le Blog')

@section('content')
    <div class="about-hero">
        <div class="hero-left">
            <div class="page-tag">Notre histoire</div>
            <h1 class="page-title">Un blog fait avec <em>soin</em></h1>
            <p class="page-intro">Depuis notre création, nous publions des textes qui demandent du temps, de la
                curiosité et une attention profonde au monde qui nous entoure.</p>
            <div class="hero-stats">
                <div>
                    <div class="stat-num">50</div>
                    <div class="stat-label">Articles</div>
                </div>
                <div>
                    <div class="stat-num">305</div>
                    <div class="stat-label">Lecteurs</div>
                </div>
                <div>
                    <div class="stat-num">250</div>
                    <div class="stat-label">Commentaires</div>
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div class="manifesto-block">
                <div class="manifesto-text">Nous croyons que chaque idée mérite d'être explorée pleinement, sans
                    raccourcis, sans sensationnalisme.</div>
                <div class="manifesto-sub">— La rédaction du Blog</div>
            </div>
        </div>
    </div>

    <div class="mission-section">
        <div>
            <h2 class="section-heading">Notre mission</h2>
        </div>
        <div class="mission-content">
            <p>Le Blog est né d'une conviction simple : à l'heure où l'information se fragmente en fils courts et en
                notifications incessantes, il reste un espace pour la pensée longue, pour les textes qui prennent le
                temps d'explorer, de nuancer, de revenir en arrière.</p>
            <p>Nous couvrons cinq grandes thématiques — Vitae, Dignissimos, Optio, Aperiam et Tenetur — qui sont autant
                de manières d'appréhender notre époque. Pas de hiérarchie entre elles : chacune éclaire l'autre.</p>
            <div class="highlight">
                "La qualité d'un article se mesure moins à sa longueur qu'à sa capacité de transformer légèrement la
                façon dont on regarde les choses."
            </div>
            <p>Notre équipe est composée d'auteurs aux profils variés — chercheurs, praticiens, passionnés — qui
                partagent une même exigence de clarté et une même curiosité pour ce qui résiste à la simplification.</p>
        </div>
    </div>

    <div class="values-section">
        <div class="values-header">
            <div class="values-tag">Ce qui nous guide</div>
            <h2 class="values-title">Nos valeurs éditoriales</h2>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-num">01</div>
                <div class="value-name">Rigueur</div>
                <div class="value-desc">Chaque affirmation est vérifiée, chaque source citée. Nous préférons la
                    complexité honnête à la simplification rassurante.</div>
            </div>
            <div class="value-card">
                <div class="value-num">02</div>
                <div class="value-name">Indépendance</div>
                <div class="value-desc">Aucun annonceur, aucun partenaire ne dicte nos choix éditoriaux. Notre seule
                    boussole est la pertinence du propos.</div>
            </div>
            <div class="value-card">
                <div class="value-num">03</div>
                <div class="value-name">Accessibilité</div>
                <div class="value-desc">La pensée rigoureuse n'est pas réservée aux initiés. Nous travaillons pour que
                    chaque texte soit lisible sans sacrifier la profondeur.</div>
            </div>
        </div>
    </div>
@endsection
