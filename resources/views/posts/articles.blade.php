<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles — Le Blog</title>
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

        /* PAGE HEADER */
        .page-header {
            padding: 60px 5% 40px;
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
        }

        .page-count {
            font-size: 0.875rem;
            color: var(--muted);
            margin-top: 0.8rem;
        }

        /* FILTERS */
        .filters-bar {
            padding: 1.5rem 5%;
            border-bottom: 1px solid var(--border);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-wrap {
            flex: 1;
            min-width: 240px;
            position: relative;
        }

        .search-wrap input {
            width: 100%;
            padding: 0.65rem 1rem 0.65rem 2.4rem;
            background: var(--card-bg);
            border: 1.5px solid var(--border);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.875rem;
            color: var(--ink);
            outline: none;
            transition: border-color 0.2s;
        }

        .search-wrap input:focus {
            border-color: var(--ink);
        }

        .search-wrap input::placeholder {
            color: var(--muted);
        }

        .search-wrap::before {
            content: '⌕';
            position: absolute;
            left: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted);
            font-size: 1rem;
        }

        .filter-cats {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .cat-pill {
            padding: 0.5rem 1.1rem;
            border: 1.5px solid var(--border);
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
            background: transparent;
            text-decoration: none;
            color: var(--muted);
            font-family: 'DM Sans', sans-serif;
        }

        .cat-pill:hover,
        .cat-pill.active {
            background: var(--ink);
            color: var(--bg);
            border-color: var(--ink);
        }

        .sort-select {
            padding: 0.6rem 1rem;
            background: var(--card-bg);
            border: 1.5px solid var(--border);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.82rem;
            color: var(--muted);
            outline: none;
            cursor: pointer;
        }

        /* LAYOUT */
        .main-layout {
            display: grid;
            grid-template-columns: 1fr 280px;
            gap: 0;
            padding: 0 5%;
            margin-top: 0;
        }

        /* ARTICLES */
        .articles-col {
            padding: 2.5rem 2.5rem 3rem 0;
            border-right: 1px solid var(--border);
        }

        .articles-list {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .article-item {
            padding: 2rem 0;
            border-bottom: 1px solid var(--border);
            display: grid;
            grid-template-columns: 1fr 100px;
            gap: 2rem;
            align-items: start;
            text-decoration: none;
            color: inherit;
            transition: all 0.15s;
        }

        .article-item:first-child {
            padding-top: 0;
        }

        .article-item:hover .ai-title {
            color: var(--accent);
        }

        .ai-cat {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        .ai-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            line-height: 1.25;
            letter-spacing: -0.3px;
            margin-bottom: 0.6rem;
            transition: color 0.2s;
        }

        .ai-excerpt {
            font-size: 0.85rem;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .ai-meta {
            font-size: 0.75rem;
            color: var(--muted);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .ai-meta span::before {
            content: '— ';
        }

        .ai-thumb {
            width: 100px;
            height: 100px;
            background: var(--border);
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--muted);
        }

        .ai-thumb.c1 {
            background: #EDE8DE;
        }

        .ai-thumb.c2 {
            background: #E8E0D5;
        }

        .ai-thumb.c3 {
            background: #DDD8CE;
        }

        .ai-thumb.c4 {
            background: #D5CFC4;
        }

        .ai-thumb.c5 {
            background: #CCC5B8;
        }

        .badge-draft {
            font-size: 0.62rem;
            font-weight: 500;
            padding: 0.2rem 0.55rem;
            background: #EDE8DE;
            color: var(--muted);
            margin-left: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        /* PAGINATION */
        .pagination {
            display: flex;
            gap: 0.5rem;
            padding: 2rem 0 0;
            justify-content: center;
        }

        .page-btn {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1.5px solid var(--border);
            background: transparent;
            color: var(--muted);
            font-size: 0.82rem;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: all 0.15s;
            text-decoration: none;
        }

        .page-btn:hover,
        .page-btn.active {
            background: var(--ink);
            color: var(--bg);
            border-color: var(--ink);
        }

        /* SIDEBAR */
        .sidebar-col {
            padding: 2.5rem 0 3rem 2.5rem;
        }

        .sidebar-block {
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-block:last-child {
            border-bottom: none;
        }

        .sidebar-label {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 1.2rem;
        }

        .popular-item {
            display: flex;
            gap: 1rem;
            padding: 0.8rem 0;
            border-bottom: 1px solid var(--border);
            text-decoration: none;
            color: inherit;
        }

        .popular-item:last-child {
            border-bottom: none;
        }

        .popular-item:hover .pop-title {
            color: var(--accent);
        }

        .pop-num {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--border);
            line-height: 1;
            flex-shrink: 0;
            width: 24px;
        }

        .pop-title {
            font-size: 0.85rem;
            line-height: 1.35;
            transition: color 0.2s;
        }

        .pop-cat {
            font-size: 0.68rem;
            color: var(--muted);
            margin-top: 0.2rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .cat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.6rem 0;
            border-bottom: 1px solid var(--border);
            font-size: 0.85rem;
            text-decoration: none;
            color: var(--ink);
            transition: color 0.2s;
        }

        .cat-item:last-child {
            border-bottom: none;
        }

        .cat-item:hover {
            color: var(--accent);
        }

        .cat-count {
            font-size: 0.75rem;
            color: var(--muted);
        }

        .tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
        }

        .tag {
            font-size: 0.7rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0.35rem 0.75rem;
            background: #EDE8DE;
            color: var(--ink);
            text-decoration: none;
            transition: all 0.2s;
        }

        .tag:hover {
            background: var(--ink);
            color: var(--bg);
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
                transform: translateY(16px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .articles-list {
            animation: fadeUp 0.5s ease both;
        }
    </style>
</head>

<body>

    <nav>
        <a href="index.html" class="nav-logo">Le Blog</a>
        <ul class="nav-links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="articles-public.html" class="active">Articles</a></li>
            <li><a href="categories-public.html">Catégories</a></li>
            <li><a href="about.html">À propos</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
        </ul>
    </nav>

    <div class="page-header">
        <div class="page-tag">Blog</div>
        <h1 class="page-title">Tous les articles</h1>
        <p class="page-count">50 articles publiés dans 5 catégories</p>
    </div>

    <div class="filters-bar">
        <div class="search-wrap">
            <input type="search" placeholder="Rechercher un article...">
        </div>
        <div class="filter-cats">
            <a href="#" class="cat-pill active">Tout</a>
            <a href="#" class="cat-pill">Vitae</a>
            <a href="#" class="cat-pill">Dignissimos</a>
            <a href="#" class="cat-pill">Optio</a>
            <a href="#" class="cat-pill">Aperiam</a>
            <a href="#" class="cat-pill">Tenetur</a>
        </div>
        <select class="sort-select">
            <option>Plus récents</option>
            <option>Plus anciens</option>
            <option>Plus commentés</option>
        </select>
    </div>

    <div class="main-layout">
        <div class="articles-col">
            <div class="articles-list">

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Optio</div>
                        <div class="ai-title">Excepturi eligendi aliquid iste laboriosam et soluta cum</div>
                        <div class="ai-excerpt">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus
                            suscipit explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam.
                            Excepturi consequuntur et voluptatem adipisci doloribus.</div>
                        <div class="ai-meta"><span>Jacklyn Lueilwitz</span><span>15 juillet 2015</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c1">E</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Aperiam</div>
                        <div class="ai-title">Aut repellat ut qui et</div>
                        <div class="ai-excerpt">Pariatur nobis dicta esse cum. Magni nesciunt facere exercitationem.
                            Dolorum est facilis quia voluptatum architecto in quibusdam ex unde enim.</div>
                        <div class="ai-meta"><span>Dr. Travon Kirlin</span><span>8 octobre 2019</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c2">A</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Optio</div>
                        <div class="ai-title">Dignissimos et eaque aut sed fugiat et</div>
                        <div class="ai-excerpt">Voluptas quod nihil voluptatum animi voluptates mollitia sed.
                            Perspiciatis blanditiis libero earum quod eos omnis. Placeat nesciunt ut ut eos ut aut.
                        </div>
                        <div class="ai-meta"><span>Dr. Jenifer Sipes</span><span>23 septembre 1988</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c3">D</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Aperiam</div>
                        <div class="ai-title">Velit ad quo quo vel</div>
                        <div class="ai-excerpt">Eveniet asperiores ut alias repellendus ab architecto. Odio ipsam non
                            qui quam quod. Quas odio ipsum distinctio. Voluptatibus et quia aliquam nam maiores.</div>
                        <div class="ai-meta"><span>Janet Keeling IV</span><span>9 juillet 2009</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c4">V</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Vitae</div>
                        <div class="ai-title">Sed molestiae omnis ratione ea enim ea</div>
                        <div class="ai-excerpt">Aut amet eum voluptatem voluptatem quibusdam tempore. Quod non delectus
                            iste. Quos quo et qui. Ullam adipisci deserunt sit velit quam quia consequatur.</div>
                        <div class="ai-meta"><span>Annetta Runolfsson</span><span>21 janvier 2012</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c5">S</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Dignissimos</div>
                        <div class="ai-title">Blanditiis commodi qui iure optio</div>
                        <div class="ai-excerpt">Mollitia eum perspiciatis dolorum. Saepe itaque exercitationem unde
                            expedita quibusdam qui ipsum aspernatur. Ut officia veritatis esse sed itaque deserunt.
                        </div>
                        <div class="ai-meta"><span>Juwan Wiegand</span><span>27 juin 2000</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c1">B</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Tenetur</div>
                        <div class="ai-title">Ut iusto et veniam facere maxime</div>
                        <div class="ai-excerpt">Recusandae cum neque placeat enim omnis et. Sit iste veritatis dolorem
                            sint quis. Asperiores et qui impedit voluptate. Dolorem explicabo illo id sint.</div>
                        <div class="ai-meta"><span>Mrs. Tia Lemke</span><span>27 décembre 1977</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c2">U</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Vitae</div>
                        <div class="ai-title">Tempore aut est ad iste excepturi</div>
                        <div class="ai-excerpt">Voluptatem recusandae odit eum ea eius voluptates et. Eum enim nobis
                            fugiat saepe vel eveniet. Et esse enim non eos magnam reprehenderit exercitationem.</div>
                        <div class="ai-meta"><span>Shaun Balistreri</span><span>23 juin 1977</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c3">T</div>
                </a>

            </div>
            <div class="pagination">
                <a href="#" class="page-btn active">1</a>
                <a href="#" class="page-btn">2</a>
                <a href="#" class="page-btn">3</a>
                <a href="#" class="page-btn">4</a>
                <a href="#" class="page-btn">5</a>
                <a href="#" class="page-btn">→</a>
            </div>
        </div>

        <aside class="sidebar-col">
            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <a href="#" class="cat-item">Vitae <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Dignissimos <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Optio <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Aperiam <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Tenetur <span class="cat-count">10 articles</span></a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Articles populaires</div>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">01</div>
                    <div>
                        <div class="pop-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="pop-cat">Optio</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">02</div>
                    <div>
                        <div class="pop-title">Aut repellat ut qui et</div>
                        <div class="pop-cat">Aperiam</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">03</div>
                    <div>
                        <div class="pop-title">Blanditiis commodi qui iure optio</div>
                        <div class="pop-cat">Dignissimos</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">04</div>
                    <div>
                        <div class="pop-title">Veritatis ut corrupti minus harum</div>
                        <div class="pop-cat">Optio</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">05</div>
                    <div>
                        <div class="pop-title">Sed laudantium facilis dolore non sunt</div>
                        <div class="pop-cat">Tenetur</div>
                    </div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Tags</div>
                <div class="tag-cloud">
                    <a href="#" class="tag">Vitae</a>
                    <a href="#" class="tag">Eligendi</a>
                    <a href="#" class="tag">Laboriosam</a>
                    <a href="#" class="tag">Optio</a>
                    <a href="#" class="tag">Soluta</a>
                    <a href="#" class="tag">Repellat</a>
                    <a href="#" class="tag">Blanditiis</a>
                    <a href="#" class="tag">Veniam</a>
                </div>
            </div>
        </aside>
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
