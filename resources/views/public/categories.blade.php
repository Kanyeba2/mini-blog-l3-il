@extends('app')

@section('title', 'Catégories - Le Blog')

@section('content')
    <div class="page-header">
        <div class="page-tag">Explorer</div>
        <h1 class="page-title">Catégories</h1>
        <p class="page-desc">Parcourez notre contenu organisé en 5 thématiques distinctes, chacune explorée avec rigueur
            et passion.</p>
    </div>

    <div class="cats-hero">
        <a href="#vitae" class="cat-hero-card">
            <div class="ch-num">01</div>
            <div>
                <div class="ch-name">Vitae</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#dignissimos" class="cat-hero-card">
            <div class="ch-num">02</div>
            <div>
                <div class="ch-name">Dignissimos</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#optio" class="cat-hero-card">
            <div class="ch-num">03</div>
            <div>
                <div class="ch-name">Optio</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#aperiam" class="cat-hero-card">
            <div class="ch-num">04</div>
            <div>
                <div class="ch-name">Aperiam</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#tenetur" class="cat-hero-card">
            <div class="ch-num">05</div>
            <div>
                <div class="ch-name">Tenetur</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
    </div>

    <div class="cats-content">
        <div class="cat-section">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 01</div>
                    <div class="cs-name">Vitae</div>
                    <div class="cs-desc">Explorations profondes sur les questions essentielles de l'existence et de la
                        vie quotidienne.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="{{ route('articles.index') }}" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="{{ route('articles.show', ['slug' => 'sed-molestiae-omnis']) }}" class="ca-card">
                        <div class="ca-title">Sed molestiae omnis ratione ea enim ea</div>
                        <div class="ca-meta"><span>Annetta Runolfsson</span><span>21 jan. 2012</span></div>
                    </a>
                    <a href="{{ route('articles.show', ['slug' => 'sit-ad-perferendis']) }}" class="ca-card">
                        <div class="ca-title">Sit ad perferendis possimus ut</div>
                        <div class="ca-meta"><span>Janet Davis</span><span>20 nov. 1996</span></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="cat-section">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 03</div>
                    <div class="cs-name">Optio</div>
                    <div class="cs-desc">Analyses des choix qui s'offrent à nous — des petites décisions aux grands
                        tournants de l'existence.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="{{ route('articles.index') }}" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="{{ route('articles.show', ['slug' => 'excepturi-eligendi']) }}" class="ca-card">
                        <div class="ca-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="ca-meta"><span>Jacklyn Lueilwitz</span><span>15 juil. 2015</span></div>
                    </a>
                    <a href="{{ route('articles.show', ['slug' => 'dignissimos-fugiat']) }}" class="ca-card">
                        <div class="ca-title">Dignissimos et eaque aut sed fugiat et</div>
                        <div class="ca-meta"><span>Dr. Jenifer Sipes</span><span>23 sept. 1988</span></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
