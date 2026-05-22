<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos — Le Blog</title>
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

        /* HERO */
        .about-hero {
            padding: 80px 5% 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            border-bottom: 2px solid var(--ink);
        }

        .hero-left {}

        .page-tag {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.8rem, 5vw, 4.5rem);
            letter-spacing: -1.5px;
            line-height: 1.03;
            margin-bottom: 1.5rem;
        }

        .page-title em {
            color: var(--accent);
            font-style: italic;
        }

        .page-intro {
            font-size: 1.1rem;
            color: var(--muted);
            line-height: 1.8;
            max-width: 500px;
            margin-bottom: 3rem;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
            padding-bottom: 3rem;
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.72rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 0.3rem;
        }

        .hero-right {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding-bottom: 3rem;
        }

        .manifesto-block {
            background: var(--ink);
            color: var(--bg);
            padding: 2.5rem;
            position: relative;
        }

        .manifesto-block::before {
            content: '❝';
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            color: var(--accent);
            line-height: 0.8;
            display: block;
            margin-bottom: 1rem;
        }

        .manifesto-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-style: italic;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .manifesto-sub {
            font-size: 0.8rem;
            color: #8C7B6B;
        }

        /* MISSION */
        .mission-section {
            padding: 80px 5%;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 5rem;
            border-bottom: 1px solid var(--border);
        }

        .section-heading {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            letter-spacing: -0.5px;
            position: sticky;
            top: 80px;
            align-self: start;
        }

        .mission-content p {
            font-size: 1rem;
            line-height: 1.9;
            color: #2A2018;
            margin-bottom: 1.5rem;
        }

        .mission-content p:last-child {
            margin-bottom: 0;
        }

        .highlight {
            background: #EDE8DE;
            padding: 1.5rem 2rem;
            border-left: 3px solid var(--accent);
            margin: 2rem 0;
            font-size: 1.05rem;
            font-style: italic;
            line-height: 1.7;
            color: var(--ink);
        }

        /* VALUES */
        .values-section {
            padding: 80px 5%;
            border-bottom: 1px solid var(--border);
        }

        .values-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .values-tag {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.8rem;
        }

        .values-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            letter-spacing: -0.5px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            border: 1.5px solid var(--ink);
        }

        .value-card {
            padding: 2.5rem 2rem;
            border-right: 1.5px solid var(--ink);
            border-bottom: 1.5px solid var(--ink);
        }

        .value-card:nth-child(3n) {
            border-right: none;
        }

        .value-card:nth-child(4),
        .value-card:nth-child(5),
        .value-card:nth-child(6) {
            border-bottom: none;
        }

        .value-num {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--border);
            margin-bottom: 1rem;
        }

        .value-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            margin-bottom: 0.6rem;
        }

        .value-desc {
            font-size: 0.85rem;
            color: var(--muted);
            line-height: 1.7;
        }

        /* TEAM */
        .team-section {
            padding: 80px 5%;
            border-bottom: 1px solid var(--border);
        }

        .team-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            padding-bottom: 1.2rem;
            border-bottom: 2px solid var(--ink);
        }

        .team-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            letter-spacing: -0.5px;
        }

        .team-count {
            font-size: 0.85rem;
            color: var(--muted);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .team-card {
            text-align: center;
        }

        .team-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: #fff;
        }

        .team-name {
            font-weight: 500;
            font-size: 0.95rem;
            margin-bottom: 0.2rem;
        }

        .team-role {
            font-size: 0.78rem;
            color: var(--muted);
        }

        .team-articles {
            font-size: 0.72rem;
            color: var(--accent);
            margin-top: 0.3rem;
        }

        /* CONTACT CTA */
        .contact-section {
            padding: 80px 5%;
            background: var(--ink);
            color: var(--bg);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .cta-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            line-height: 1.1;
            letter-spacing: -0.5px;
        }

        .cta-title em {
            color: var(--accent);
            font-style: italic;
        }

        .cta-desc {
            font-size: 0.95rem;
            color: #8C7B6B;
            line-height: 1.7;
            margin-top: 1rem;
        }

        .cta-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .cta-input {
            padding: 0.85rem 1.2rem;
            background: #2A2018;
            border: 1.5px solid #3A3025;
            color: var(--bg);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            outline: none;
            transition: border-color 0.2s;
        }

        .cta-input:focus {
            border-color: #5A4A38;
        }

        .cta-input::placeholder {
            color: #5A4A38;
        }

        textarea.cta-input {
            resize: vertical;
            min-height: 100px;
        }

        .cta-btn {
            padding: 0.9rem;
            background: var(--accent);
            border: none;
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .cta-btn:hover {
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
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .about-hero {
            animation: fadeUp 0.5s ease both;
        }

        .values-grid {
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
            <li><a href="categories-public.html">Catégories</a></li>
            <li><a href="about.html" class="active">À propos</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
        </ul>
    </nav>

    <!-- HERO -->
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

    <!-- MISSION -->
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
            <p>Chaque article est relu, discuté, souvent réécrit. Ce soin, nous le considérons comme un respect dû au
                lecteur.</p>
        </div>
    </div>

    <!-- VALUES -->
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
            <div class="value-card">
                <div class="value-num">04</div>
                <div class="value-name">Durabilité</div>
                <div class="value-desc">Nous écrivons pour durer. Nos articles restent pertinents mois et années après
                    leur publication, loin du flux de l'actualité immédiate.</div>
            </div>
            <div class="value-card">
                <div class="value-num">05</div>
                <div class="value-name">Dialogue</div>
                <div class="value-desc">Chaque article est une invitation. Les commentaires sont modérés mais valorisés
                    : les meilleures idées émergent des échanges.</div>
            </div>
            <div class="value-card">
                <div class="value-num">06</div>
                <div class="value-name">Diversité</div>
                <div class="value-desc">Nous veillons à la diversité des voix, des expériences et des points de vue
                    représentés dans nos colonnes.</div>
            </div>
        </div>
    </div>

    <!-- TEAM -->
    <div class="team-section">
        <div class="team-header">
            <h2 class="team-title">L'équipe</h2>
            <span class="team-count">Quelques auteurs réguliers</span>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar" style="background:#C0392B">JL</div>
                <div class="team-name">Jacklyn Lueilwitz</div>
                <div class="team-role">Rédactrice en chef</div>
                <div class="team-articles">3 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#2E86AB">DT</div>
                <div class="team-name">Dr. Travon Kirlin</div>
                <div class="team-role">Auteur — Aperiam</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#27AE60">AR</div>
                <div class="team-name">Annetta Runolfsson</div>
                <div class="team-role">Auteure — Vitae</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#8E44AD">DS</div>
                <div class="team-name">Dr. Jenifer Sipes</div>
                <div class="team-role">Auteure — Optio</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#E67E22">TL</div>
                <div class="team-name">Mrs. Tia Lemke</div>
                <div class="team-role">Auteure — Tenetur</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#1ABC9C">JW</div>
                <div class="team-name">Juwan Wiegand</div>
                <div class="team-role">Auteur — Dignissimos</div>
                <div class="team-articles">1 article publié</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#2C3E50">OS</div>
                <div class="team-name">Osborne Sanford</div>
                <div class="team-role">Auteur — Optio</div>
                <div class="team-articles">1 article publié</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#7F8C8D">EM</div>
                <div class="team-name">Esteban Murphy</div>
                <div class="team-role">Auteur — Tenetur</div>
                <div class="team-articles">1 article publié</div>
            </div>
        </div>
    </div>

    <!-- CONTACT CTA -->
    <div class="contact-section">
        <div>
            <h2 class="cta-title">Envie de <em>contribuer</em> ?</h2>
            <p class="cta-desc">Vous avez un sujet à explorer, une proposition d'article ou simplement une question ?
                Nous serions heureux de vous entendre.</p>
        </div>
        <div>
            <div class="cta-form">
                <input type="text" class="cta-input" placeholder="Votre nom">
                <input type="email" class="cta-input" placeholder="votre@email.com">
                <textarea class="cta-input" placeholder="Votre message..."></textarea>
                <button class="cta-btn">Envoyer le message</button>
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
