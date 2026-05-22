<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories — Le Blog</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #F5F0E8;
            --ink: #1A1410;
            --accent: #C0392B;
            --muted: #8C7B6B;
            --card-bg: #FDFBF7;
            --border: #E0D8CC;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
        }

        nav {
            border-bottom: 2px solid var(--ink);
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
            background: var(--bg);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--ink);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--muted);
            font-size: 0.875rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: color 0.2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--accent);
        }

        .page-header {
            padding: 60px 5% 50px;
            border-bottom: 2px solid var(--ink);
        }

        .page-tag {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.8rem;
        }

        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.4rem, 4vw, 3.5rem);
            letter-spacing: -1px;
            line-height: 1.05;
            margin-bottom: 0.8rem;
        }

        .page-desc {
            font-size: 1rem;
            color: var(--muted);
            line-height: 1.7;
            max-width: 600px;
        }

        /* CATEGORIES HERO GRID */
        .cats-hero {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0;
            border-bottom: 2px solid var(--ink);
            border-left: 2px solid var(--ink);
        }

        .cat-hero-card {
            border-right: 2px solid var(--ink);
            padding: 3rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 280px;
            text-decoration: none;
            color: var(--ink);
            transition: all 0.25s;
            position: relative;
            overflow: hidden;
        }

        .cat-hero-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--ink);
            transform: translateY(100%);
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 0;
        }

        .cat-hero-card:hover::after {
            transform: translateY(0);
        }

        .cat-hero-card:hover .ch-num,
        .cat-hero-card:hover .ch-name,
        .cat-hero-card:hover .ch-count,
        .cat-hero-card:hover .ch-arrow {
            color: var(--bg);
        }

        .ch-num {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1;
            color: var(--border);
            transition: color 0.35s;
            position: relative;
            z-index: 1;
        }

        .ch-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-top: auto;
            transition: color 0.35s;
            position: relative;
            z-index: 1;
        }

        .ch-count {
            font-size: 0.78rem;
            color: var(--muted);
            margin-top: 0.3rem;
            letter-spacing: 0.05em;
            transition: color 0.35s;
            position: relative;
            z-index: 1;
        }

        .ch-arrow {
            font-size: 1.2rem;
            color: var(--accent);
            margin-top: 1rem;
            transition: color 0.35s;
            position: relative;
            z-index: 1;
        }

        .cat-hero-card:hover .ch-arrow {
            color: var(--accent);
        }

        /* CATEGORY SECTIONS */
        .cats-content {
            padding: 0 5%;
        }

        .cat-section {
            padding: 4rem 0;
            border-bottom: 1px solid var(--border);
        }

        .cat-section:last-child {
            border-bottom: none;
        }

        .cat-section-header {
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 3rem;
            margin-bottom: 2.5rem;
            align-items: end;
        }

        .cat-section-meta {}

        .cs-tag {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        .cs-name {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            letter-spacing: -0.5px;
            line-height: 1;
        }

        .cs-desc {
            font-size: 0.85rem;
            color: var(--muted);
            margin-top: 0.6rem;
            line-height: 1.6;
        }

        .cs-count {
            font-size: 0.78rem;
            color: var(--muted);
            margin-top: 0.4rem;
        }

        .cs-link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--accent);
            text-decoration: none;
            margin-top: 1rem;
        }

        .cs-link:hover {
            text-decoration: underline;
        }

        .cat-articles {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5px;
            background: var(--border);
        }

        .ca-card {
            background: var(--card-bg);
            padding: 1.5rem;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            transition: background 0.2s;
        }

        .ca-card:hover {
            background: #EDE8DE;
        }

        .ca-title {
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            line-height: 1.3;
            letter-spacing: -0.2px;
        }

        .ca-meta {
            font-size: 0.73rem;
            color: var(--muted);
            margin-top: auto;
        }

        .ca-meta span::before {
            content: '— ';
        }

        footer {
            border-top: 2px solid var(--ink);
            padding: 2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: var(--muted);
        }

        footer a {
            color: var(--muted);
            text-decoration: none;
            margin-left: 1.5rem;
        }

        footer a:hover {
            color: var(--accent);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .cats-hero {
            animation: fadeUp 0.5s ease both;
        }

        .cats-content {
            animation: fadeUp 0.5s 0.1s ease both;
        }
    </style>
</head>

<body>

    <nav>
        <a href="index.html" class="nav-logo">Le Blog</a>
        <ul class="nav-links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="articles-public.html">Articles</a></li>
            <li><a href="categories-public.html" class="active">Catégories</a></li>
            <li><a href="about.html">À propos</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
        </ul>
    </nav>

    <div class="page-header">
        <div class="page-tag">Explorer</div>
        <h1 class="page-title">Catégories</h1>
        <p class="page-desc">Parcourez notre contenu organisé en 5 thématiques distinctes, chacune explorée avec rigueur
            et passion.</p>
    </div>

    <!-- HERO GRID -->
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

        <!-- VITAE -->
        <div class="cat-section" id="vitae">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 01</div>
                    <div class="cs-name">Vitae</div>
                    <div class="cs-desc">Explorations profondes sur les questions essentielles de l'existence et de la
                        vie quotidienne.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Sed molestiae omnis ratione ea enim ea</div>
                        <div class="ca-meta"><span>Annetta Runolfsson</span><span>21 jan. 2012</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Sit ad perferendis possimus ut</div>
                        <div class="ca-meta"><span>Janet Davis</span><span>20 nov. 1996</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Veniam maxime autem enim</div>
                        <div class="ca-meta"><span>Madalyn Lowe</span><span>1 oct. 1990</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- DIGNISSIMOS -->
        <div class="cat-section" id="dignissimos">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 02</div>
                    <div class="cs-name">Dignissimos</div>
                    <div class="cs-desc">Réflexions sur la dignité, l'éthique et les valeurs qui fondent nos sociétés
                        contemporaines.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Neque consectetur dolorem in vel aliquam</div>
                        <div class="ca-meta"><span>Emelie Lynch</span><span>18 oct. 1993</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Maxime eius et laboriosam assumenda dolores</div>
                        <div class="ca-meta"><span>Emmanuel Hermiston</span><span>8 juin 1998</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Modi voluptatem autem libero esse pariatur</div>
                        <div class="ca-meta"><span>Leland Pacocha</span><span>9 fév. 1999</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- OPTIO -->
        <div class="cat-section" id="optio">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 03</div>
                    <div class="cs-name">Optio</div>
                    <div class="cs-desc">Analyses des choix qui s'offrent à nous — des petites décisions aux grands
                        tournants de l'existence.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="ca-meta"><span>Jacklyn Lueilwitz</span><span>15 juil. 2015</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Dignissimos et eaque aut sed fugiat et</div>
                        <div class="ca-meta"><span>Dr. Jenifer Sipes</span><span>23 sept. 1988</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Veritatis ut corrupti minus harum</div>
                        <div class="ca-meta"><span>Osborne Sanford</span><span>6 fév. 1984</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- APERIAM -->
        <div class="cat-section" id="aperiam">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 04</div>
                    <div class="cs-name">Aperiam</div>
                    <div class="cs-desc">Ouvertures vers de nouvelles perspectives — des sujets qui élargissent notre
                        compréhension du monde.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Aut repellat ut qui et</div>
                        <div class="ca-meta"><span>Dr. Travon Kirlin</span><span>8 oct. 2019</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Velit ad quo quo vel</div>
                        <div class="ca-meta"><span>Janet Keeling IV</span><span>9 juil. 2009</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Quam sint eaque nihil aut</div>
                        <div class="ca-meta"><span>Travon Cartwright</span><span>8 juil. 2010</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- TENETUR -->
        <div class="cat-section" id="tenetur">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 05</div>
                    <div class="cs-name">Tenetur</div>
                    <div class="cs-desc">Ce qui nous tient — les engagements, responsabilités et liens qui structurent
                        nos vies.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Ut iusto et veniam facere maxime</div>
                        <div class="ca-meta"><span>Mrs. Tia Lemke</span><span>27 déc. 1977</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Eveniet optio dolorum nisi</div>
                        <div class="ca-meta"><span>Marian Brekke</span><span>2 juin 1999</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Sed laudantium facilis dolore non sunt</div>
                        <div class="ca-meta"><span>Esteban Murphy</span><span>4 nov. 1980</span></div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <span>© 2026 Le Blog. Tous droits réservés.</span>
        <div>
            <a href="#">Mentions légales</a>
            <a href="#">Confidentialité</a>
            <a href="dashboard.html">Admin</a>
        </div>
    </footer>

</body>

</html>
