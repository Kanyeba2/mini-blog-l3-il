<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Blog — Accueil</title>
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

        .hero {
            padding: 80px 5% 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            border-bottom: 1px solid var(--border);
        }

        .hero-tag {
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 1.2rem;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.6rem, 4vw, 4rem);
            line-height: 1.05;
            letter-spacing: -1.5px;
            margin-bottom: 1.5rem;
        }

        .hero-desc {
            font-size: 1.05rem;
            color: var(--muted);
            line-height: 1.8;
            max-width: 480px;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.75rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 0.3rem;
        }

        .hero-visual {
            position: relative;
            height: 360px;
        }

        .stack-card {
            position: absolute;
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 3px;
            padding: 2rem;
        }

        .stack-card:nth-child(1) {
            width: 82%;
            top: 0;
            left: 9%;
            transform: rotate(-2deg);
        }

        .stack-card:nth-child(2) {
            width: 84%;
            top: 20px;
            left: 7%;
            transform: rotate(1deg);
            background: #EDE8DE;
        }

        .stack-card:nth-child(3) {
            width: 86%;
            top: 40px;
            left: 5%;
            background: var(--ink);
            color: var(--bg);
        }

        .card-label {
            font-size: 0.68rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.8rem;
        }

        .card-title-sm {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            line-height: 1.3;
            margin-bottom: 0.5rem;
        }

        .card-excerpt-sm {
            font-size: 0.82rem;
            opacity: 0.6;
            line-height: 1.6;
        }

        .section {
            padding: 60px 5%;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 2.5rem;
            padding-bottom: 1.2rem;
            border-bottom: 2px solid var(--ink);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            letter-spacing: -0.5px;
        }

        .section-link {
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--accent);
            text-decoration: none;
        }

        .section-link:hover {
            text-decoration: underline;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 1.5px;
            background: var(--ink);
            border: 1.5px solid var(--ink);
        }

        .article-card {
            background: var(--card-bg);
            padding: 2rem;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            transition: background 0.2s;
        }

        .article-card:hover {
            background: #EDE8DE;
        }

        .article-card.featured {
            padding: 2.5rem;
        }

        .article-cat {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent);
        }

        .article-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.35rem;
            line-height: 1.25;
            letter-spacing: -0.3px;
        }

        .article-card.featured .article-title {
            font-size: 1.9rem;
        }

        .article-excerpt {
            font-size: 0.875rem;
            color: var(--muted);
            line-height: 1.7;
            flex: 1;
        }

        .article-meta {
            font-size: 0.75rem;
            color: var(--muted);
            display: flex;
            gap: 1rem;
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            flex-wrap: wrap;
        }

        .article-meta span::before {
            content: '— ';
        }

        .categories-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .cat-pill {
            padding: 0.6rem 1.4rem;
            border: 1.5px solid var(--ink);
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
            background: transparent;
            text-decoration: none;
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
        }

        .cat-pill:hover,
        .cat-pill.active {
            background: var(--ink);
            color: var(--bg);
        }

        .newsletter {
            background: var(--ink);
            color: var(--bg);
            padding: 60px 5%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .newsletter-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem;
            line-height: 1.1;
            letter-spacing: -0.5px;
        }

        .newsletter-title em {
            color: var(--accent);
            font-style: italic;
        }

        .newsletter-sub {
            color: #8C7B6B;
            font-size: 0.9rem;
            margin-top: 0.8rem;
            line-height: 1.6;
        }

        .newsletter-form {
            display: flex;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.9rem 1.2rem;
            background: #2A2018;
            border: 1.5px solid #3A3025;
            border-right: none;
            color: var(--bg);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            outline: none;
        }

        .newsletter-input::placeholder {
            color: #5A4A38;
        }

        .newsletter-btn {
            padding: 0.9rem 1.8rem;
            background: var(--accent);
            border: none;
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            cursor: pointer;
            transition: opacity 0.2s;
            white-space: nowrap;
        }

        .newsletter-btn:hover {
            opacity: 0.85;
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
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero {
            animation: fadeUp 0.6s ease both;
        }

        .articles-grid {
            animation: fadeUp 0.6s 0.15s ease both;
        }
    </style>
</head>

<body>

    <nav>
        <a href="index.html" class="nav-logo">Le Blog</a>
        <ul class="nav-links">
            <li><a href="index.html" class="active">Accueil</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Catégories</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
        </ul>
    </nav>

    <section class="hero">
        <div>
            <p class="hero-tag">Bienvenue sur notre blog</p>
            <h1 class="hero-title">Des idées qui valent la peine d'être lues</h1>
            <p class="hero-desc">Un espace de réflexion, d'exploration et de partage. Nous publions des articles soignés
                sur des sujets qui comptent vraiment.</p>
            <div class="hero-stats">
                <div>
                    <div class="stat-num">50</div>
                    <div class="stat-label">Articles publiés</div>
                </div>
                <div>
                    <div class="stat-num">5</div>
                    <div class="stat-label">Catégories</div>
                </div>
                <div>
                    <div class="stat-num">250</div>
                    <div class="stat-label">Commentaires</div>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="stack-card">
                <div class="card-label">Vitae</div>
                <div class="card-title-sm">Sed molestiae omnis ratione ea enim</div>
                <div class="card-excerpt-sm">Un article fascinant sur les mystères de la vie quotidienne...</div>
            </div>
            <div class="stack-card">
                <div class="card-label">Dignissimos</div>
                <div class="card-title-sm">Veniam maxime autem enim</div>
                <div class="card-excerpt-sm">Explorer les chemins inattendus de la connaissance...</div>
            </div>
            <div class="stack-card">
                <div class="card-label" style="color:var(--accent)">À la une</div>
                <div class="card-title-sm" style="color:#F5F0E8">Excepturi eligendi aliquid iste laboriosam</div>
                <div class="card-excerpt-sm" style="color:#8C7B6B">Le dernier article qui fait parler tout le monde...
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom:0">
        <div class="section-header">
            <h2 class="section-title">Catégories</h2>
            <a href="#" class="section-link">Voir toutes →</a>
        </div>
        <div class="categories-row">
            <a href="#" class="cat-pill active">Tout</a>
            <a href="#" class="cat-pill">Vitae</a>
            <a href="#" class="cat-pill">Dignissimos</a>
            <a href="#" class="cat-pill">Optio</a>
            <a href="#" class="cat-pill">Aperiam</a>
            <a href="#" class="cat-pill">Tenetur</a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Derniers articles</h2>
            <a href="#" class="section-link">Voir tout →</a>
        </div>
        <div class="articles-grid">
            <a href="article.html" class="article-card featured">
                <div class="article-cat">Vitae &bull; À la une</div>
                <h2 class="article-title">Excepturi eligendi aliquid iste laboriosam et soluta cum</h2>
                <p class="article-excerpt">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus
                    suscipit explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam. Excepturi
                    consequuntur et voluptatem adipisci doloribus et. Tenetur eligendi earum qui sunt qui. Facilis unde
                    iure perferendis commodi corrupti blanditiis earum.</p>
                <div class="article-meta">
                    <span>Jacklyn Lueilwitz</span>
                    <span>15 juillet 2015</span>
                    <span>5 commentaires</span>
                </div>
            </a>
            <a href="article.html" class="article-card">
                <div class="article-cat">Aperiam</div>
                <h3 class="article-title">Aut repellat ut qui et</h3>
                <p class="article-excerpt">Pariatur nobis dicta esse cum. Magni nesciunt facere exercitationem. Dolorum
                    est facilis quia voluptatum architecto in quibusdam ex unde enim.</p>
                <div class="article-meta">
                    <span>Dr. Travon Kirlin</span>
                    <span>8 oct. 2019</span>
                </div>
            </a>
            <a href="article.html" class="article-card">
                <div class="article-cat">Optio</div>
                <h3 class="article-title">Dignissimos et eaque aut sed fugiat et</h3>
                <p class="article-excerpt">Voluptas quod nihil voluptatum animi voluptates mollitia sed. Perspiciatis
                    blanditiis libero earum quod eos omnis. Placeat nesciunt ut ut eos.</p>
                <div class="article-meta">
                    <span>Dr. Jenifer Sipes</span>
                    <span>23 sept. 1988</span>
                </div>
            </a>
        </div>
    </section>

    <div class="newsletter">
        <div>
            <h2 class="newsletter-title">Ne manquez aucun <em>article</em></h2>
            <p class="newsletter-sub">Inscrivez-vous et recevez nos meilleurs articles directement dans votre boîte
                mail.</p>
        </div>
        <div>
            <div class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="votre@email.com">
                <button class="newsletter-btn">S'inscrire</button>
            </div>
            <p style="color:#5A4A38;font-size:0.72rem;margin-top:0.7rem">Pas de spam. Désabonnement en un clic.</p>
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
