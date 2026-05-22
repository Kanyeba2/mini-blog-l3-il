<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article — Excepturi eligendi aliquid iste laboriosam</title>
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

        .nav-links a:hover {
            color: var(--accent);
        }

        .article-hero {
            padding: 60px 5% 0;
            border-bottom: 1px solid var(--border);
        }

        .breadcrumb {
            font-size: 0.75rem;
            color: var(--muted);
            margin-bottom: 2rem;
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .breadcrumb a {
            color: var(--muted);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--accent);
        }

        .breadcrumb span {
            color: var(--border);
        }

        .article-cat {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 1rem;
            display: inline-block;
            border: 1.5px solid var(--accent);
            padding: 0.3rem 0.8rem;
        }

        .article-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 3.5rem);
            line-height: 1.08;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
            max-width: 860px;
        }

        .article-meta-bar {
            display: flex;
            align-items: center;
            gap: 2rem;
            padding: 1.5rem 0;
            border-top: 1px solid var(--border);
            flex-wrap: wrap;
        }

        .author-block {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--ink);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bg);
            font-weight: 700;
            font-size: 0.85rem;
            flex-shrink: 0;
        }

        .author-name {
            font-weight: 500;
            font-size: 0.9rem;
        }

        .author-sub {
            font-size: 0.75rem;
            color: var(--muted);
        }

        .meta-item {
            font-size: 0.8rem;
            color: var(--muted);
        }

        .meta-item strong {
            color: var(--ink);
        }

        .share-btn {
            margin-left: auto;
            padding: 0.5rem 1.2rem;
            background: transparent;
            border: 1.5px solid var(--ink);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
        }

        .share-btn:hover {
            background: var(--ink);
            color: var(--bg);
        }

        .article-layout {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 4rem;
            padding: 0 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .article-body {
            padding: 3rem 0;
        }

        .article-lead {
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--muted);
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 1px solid var(--border);
            font-style: italic;
        }

        .article-content p {
            font-size: 1rem;
            line-height: 1.9;
            margin-bottom: 1.5rem;
            color: #2A2018;
        }

        .article-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            margin: 2.5rem 0 1rem;
            letter-spacing: -0.3px;
        }

        .article-content blockquote {
            border-left: 3px solid var(--accent);
            padding: 1rem 1.5rem;
            margin: 2rem 0;
            background: #EDE8DE;
            font-style: italic;
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .article-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
        }

        .tag {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.4rem 0.9rem;
            background: #EDE8DE;
            color: var(--ink);
            text-decoration: none;
        }

        .tag:hover {
            background: var(--ink);
            color: var(--bg);
        }

        /* SIDEBAR */
        .sidebar {
            padding: 3rem 0;
        }

        .sidebar-block {
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-label {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 1.2rem;
        }

        .related-card {
            text-decoration: none;
            color: inherit;
            display: block;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border);
        }

        .related-card:last-child {
            border-bottom: none;
        }

        .related-card:hover .related-title {
            color: var(--accent);
        }

        .related-cat {
            font-size: 0.65rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.3rem;
        }

        .related-title {
            font-family: 'Playfair Display', serif;
            font-size: 0.95rem;
            line-height: 1.3;
            transition: color 0.2s;
        }

        .related-date {
            font-size: 0.72rem;
            color: var(--muted);
            margin-top: 0.3rem;
        }

        .toc-list {
            list-style: none;
        }

        .toc-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--border);
            font-size: 0.85rem;
        }

        .toc-list a {
            text-decoration: none;
            color: var(--muted);
            transition: color 0.2s;
        }

        .toc-list a:hover {
            color: var(--accent);
        }

        .toc-list span {
            color: var(--border);
            margin-right: 0.5rem;
            font-size: 0.7rem;
        }

        /* COMMENTS */
        .comments-section {
            padding: 0 5% 60px;
            border-top: 2px solid var(--ink);
        }

        .comments-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            padding: 2rem 0 1.5rem;
        }

        .comment {
            padding: 1.5rem 0;
            border-bottom: 1px solid var(--border);
            display: grid;
            grid-template-columns: 44px 1fr;
            gap: 1rem;
        }

        .comment-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--ink);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bg);
            font-weight: 700;
            font-size: 0.85rem;
        }

        .comment-author {
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }

        .comment-date {
            font-size: 0.72rem;
            color: var(--muted);
            margin-bottom: 0.7rem;
        }

        .comment-text {
            font-size: 0.9rem;
            line-height: 1.7;
            color: #3A3025;
        }

        /* COMMENT FORM */
        .comment-form {
            background: var(--card-bg);
            border: 1.5px solid var(--border);
            padding: 2rem;
            margin-top: 2rem;
        }

        .comment-form h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
            margin-bottom: 1rem;
        }

        .form-group label {
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .form-group input,
        .form-group textarea {
            padding: 0.75rem 1rem;
            background: var(--bg);
            border: 1.5px solid var(--border);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            color: var(--ink);
            outline: none;
            transition: border-color 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--ink);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-primary {
            padding: 0.85rem 2rem;
            background: var(--ink);
            color: var(--bg);
            border: none;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: var(--accent);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .article-hero {
            animation: fadeUp 0.5s ease both;
        }

        .article-layout {
            animation: fadeUp 0.5s 0.1s ease both;
        }
    </style>
</head>

<body>

    <nav>
        <a href="index.html" class="nav-logo">Le Blog</a>
        <ul class="nav-links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Catégories</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
        </ul>
    </nav>

    <div class="article-hero">
        <div class="breadcrumb">
            <a href="index.html">Accueil</a>
            <span>/</span>
            <a href="#">Articles</a>
            <span>/</span>
            <a href="#">Optio</a>
            <span>/</span>
            <span>Excepturi eligendi...</span>
        </div>
        <div class="article-cat">Optio</div>
        <h1 class="article-title">Excepturi eligendi aliquid iste laboriosam et soluta cum</h1>
        <div class="article-meta-bar">
            <div class="author-block">
                <div class="author-avatar">JL</div>
                <div>
                    <div class="author-name">Jacklyn Lueilwitz</div>
                    <div class="author-sub">Auteur</div>
                </div>
            </div>
            <div class="meta-item"><strong>Publié le</strong> 15 juillet 2015</div>
            <div class="meta-item"><strong>5</strong> commentaires</div>
            <div class="meta-item"><strong>Catégorie :</strong> Optio</div>
            <button class="share-btn">↗ Partager</button>
        </div>
    </div>

    <div class="article-layout">
        <main class="article-body">
            <p class="article-lead">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus suscipit
                explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam.</p>

            <div class="article-content">
                <p>Excepturi consequuntur et voluptatem adipisci doloribus et. Tenetur eligendi earum qui sunt qui.
                    Facilis unde iure perferendis commodi corrupti blanditiis earum. Harum veritatis qui ex animi
                    perspiciatis laudantium.</p>

                <p>Aut amet repellendus totam molestiae error. Doloremque qui aspernatur soluta laboriosam
                    necessitatibus voluptas animi. Dolore sint ab voluptas qui eaque. Sed qui amet laborum nemo
                    accusantium voluptatem placeat distinctio.</p>

                <h2>Une perspective nouvelle</h2>

                <p>Rem id et amet est. Nostrum ab inventore deserunt et fuga perferendis dolore. Quia nesciunt officia
                    voluptatum delectus voluptatem dolorum et. Doloremque unde aut explicabo quidem illum id odio
                    corrupti. Quas quas autem deleniti ut eveniet.</p>

                <blockquote>
                    "Ea officiis tempore dignissimos quia impedit rerum repudiandae et. Tenetur et et at. Sint omnis
                    mollitia dolor veniam et et architecto."
                </blockquote>

                <p>Rerum aut id ipsum voluptatem quia doloremque. Excepturi consequuntur et voluptatem adipisci. Tenetur
                    eligendi earum qui sunt qui facilis unde iure perferendis commodi corrupti blanditiis earum.</p>

                <h2>Pour aller plus loin</h2>

                <p>Harum veritatis qui ex animi perspiciatis laudantium. Aut amet repellendus totam molestiae error
                    perspiciatis. Doloremque qui aspernatur soluta laboriosam necessitatibus voluptas animi culpa sit.
                </p>

                <p>Rem id et amet est inventore deserunt. Nostrum ab inventore deserunt et fuga perferendis dolore
                    excepturi. Quia nesciunt officia voluptatum delectus voluptatem dolorum et ratione.</p>
            </div>

            <div class="article-tags">
                <a href="#" class="tag">Optio</a>
                <a href="#" class="tag">Laboriosam</a>
                <a href="#" class="tag">Eligendi</a>
                <a href="#" class="tag">Soluta</a>
            </div>
        </main>

        <aside class="sidebar">
            <div class="sidebar-block">
                <div class="sidebar-label">Table des matières</div>
                <ul class="toc-list">
                    <li><a href="#"><span>01</span>Introduction</a></li>
                    <li><a href="#"><span>02</span>Une perspective nouvelle</a></li>
                    <li><a href="#"><span>03</span>Pour aller plus loin</a></li>
                    <li><a href="#"><span>04</span>Commentaires</a></li>
                </ul>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Articles récents</div>
                <a href="article.html" class="related-card">
                    <div class="related-cat">Aperiam</div>
                    <div class="related-title">Aut repellat ut qui et</div>
                    <div class="related-date">8 octobre 2019</div>
                </a>
                <a href="article.html" class="related-card">
                    <div class="related-cat">Vitae</div>
                    <div class="related-title">Velit ad quo quo vel</div>
                    <div class="related-date">9 juillet 2009</div>
                </a>
                <a href="article.html" class="related-card">
                    <div class="related-cat">Tenetur</div>
                    <div class="related-title">Ut iusto et veniam facere maxime</div>
                    <div class="related-date">27 déc. 1977</div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <div style="display:flex;flex-direction:column;gap:0.5rem">
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Vitae
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Dignissimos
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Optio
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Aperiam
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0">Tenetur
                        <span style="color:var(--muted)">10</span></a>
                </div>
            </div>

            <div>
                <div class="sidebar-label">À propos de l'auteur</div>
                <div style="display:flex;gap:1rem;align-items:flex-start">
                    <div class="author-avatar" style="width:52px;height:52px;font-size:1rem;flex-shrink:0">JL</div>
                    <div>
                        <div style="font-weight:500;font-size:0.9rem;margin-bottom:0.3rem">Jacklyn Lueilwitz</div>
                        <div style="font-size:0.8rem;color:var(--muted);line-height:1.6">Rédactrice passionnée, elle
                            explore des sujets variés avec curiosité et rigueur.</div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!-- COMMENTS -->
    <div class="comments-section">
        <h2 class="comments-title">5 Commentaires</h2>

        <div class="comment">
            <div class="comment-avatar">UR</div>
            <div>
                <div class="comment-author">Ut Reiciendis</div>
                <div class="comment-date">17 avril 2026 à 06:35</div>
                <div class="comment-text">Ut reiciendis et totam animi sed commodi facere amet. Voluptatem itaque aut
                    accusamus perspiciatis.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">VI</div>
            <div>
                <div class="comment-author">Voluptatem Itaque</div>
                <div class="comment-date">17 avril 2026 à 07:12</div>
                <div class="comment-text">Debitis cumque nihil est molestias iste et. Laudantium aliquam adipisci
                    tempora suscipit voluptatem rem quos reprehenderit.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">TC</div>
            <div>
                <div class="comment-author">Temporibus Odit</div>
                <div class="comment-date">18 avril 2026 à 09:44</div>
                <div class="comment-text">Temporibus odit dolor ipsa sequi necessitatibus. Est quasi et deserunt harum
                    voluptas excepturi provident.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">DC</div>
            <div>
                <div class="comment-author">Debitis Cumque</div>
                <div class="comment-date">19 avril 2026 à 14:20</div>
                <div class="comment-text">Laudantium aliquam adipisci tempora suscipit voluptatem rem quos. Debitis
                    cumque nihil est molestias iste.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">EA</div>
            <div>
                <div class="comment-author">Ea Officiis</div>
                <div class="comment-date">20 avril 2026 à 11:05</div>
                <div class="comment-text">Ea officiis tempore dignissimos quia impedit rerum repudiandae et. Tenetur et
                    et at sint omnis mollitia.</div>
            </div>
        </div>

        <div class="comment-form">
            <h3>Laisser un commentaire</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="c-name">Nom *</label>
                    <input type="text" id="c-name" name="name" placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <label for="c-email">Email *</label>
                    <input type="email" id="c-email" name="email" placeholder="votre@email.com">
                </div>
            </div>
            <div class="form-group">
                <label for="c-content">Commentaire *</label>
                <textarea id="c-content" name="content" placeholder="Votre commentaire..."></textarea>
            </div>
            <button type="submit" class="btn-primary">Publier le commentaire</button>
        </div>
    </div>

</body>

</html>
