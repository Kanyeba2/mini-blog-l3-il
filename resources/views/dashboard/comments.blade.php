<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires — Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap"
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
            --bg: #0F0F0F;
            --surface: #1A1A1A;
            --surface2: #242424;
            --ink: #F0EDE8;
            --accent: #C0392B;
            --muted: #888;
            --border: #2E2E2E;
            --success: #27AE60;
            --warning: #F39C12;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-brand {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: var(--ink);
            text-decoration: none;
            display: block;
        }

        .sidebar-sub {
            font-size: 0.7rem;
            color: var(--muted);
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-top: 0.2rem;
        }

        .sidebar-nav {
            padding: 1rem 0;
            flex: 1;
        }

        .nav-section-label {
            font-size: 0.62rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            padding: 1rem 1.5rem 0.5rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.7rem 1.5rem;
            text-decoration: none;
            color: var(--muted);
            font-size: 0.875rem;
            transition: all 0.15s;
            border-left: 2px solid transparent;
        }

        .nav-item:hover {
            color: var(--ink);
            background: var(--surface2);
        }

        .nav-item.active {
            color: var(--ink);
            background: var(--surface2);
            border-left-color: var(--accent);
        }

        .nav-badge {
            margin-left: auto;
            background: var(--accent);
            color: #fff;
            font-size: 0.65rem;
            padding: 0.15rem 0.4rem;
            border-radius: 2px;
        }

        .sidebar-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border);
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .u-av {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.8rem;
            color: #fff;
            flex-shrink: 0;
        }

        .main {
            margin-left: 240px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 0 2rem;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .topbar-title {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .btn {
            padding: 0.55rem 1.2rem;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
        }

        .btn-primary:hover {
            opacity: 0.85;
        }

        .btn-ghost {
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
        }

        .btn-ghost:hover {
            color: var(--ink);
            border-color: var(--muted);
        }

        .btn-success {
            background: transparent;
            color: var(--success);
            border: 1px solid var(--success);
            font-size: 0.72rem;
            padding: 0.3rem 0.75rem;
        }

        .btn-success:hover {
            background: var(--success);
            color: #fff;
        }

        .btn-danger {
            background: transparent;
            color: #E74C3C;
            border: 1px solid #E74C3C;
            font-size: 0.72rem;
            padding: 0.3rem 0.75rem;
        }

        .btn-danger:hover {
            background: #E74C3C;
            color: #fff;
        }

        .btn-warning {
            background: transparent;
            color: var(--warning);
            border: 1px solid var(--warning);
            font-size: 0.72rem;
            padding: 0.3rem 0.75rem;
        }

        .btn-warning:hover {
            background: var(--warning);
            color: #fff;
        }

        .content {
            padding: 2rem;
            flex: 1;
        }

        /* STATS ROW */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--surface);
            border: 1px solid var(--border);
            padding: 1.2rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .stat-icon {
            font-size: 1.4rem;
            opacity: 0.6;
        }

        .stat-info {}

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1;
        }

        .stat-lbl {
            font-size: 0.68rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 0.2rem;
        }

        /* TOOLBAR */
        .toolbar {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            align-items: center;
        }

        .search-input {
            flex: 1;
            max-width: 320px;
            padding: 0.6rem 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.875rem;
            outline: none;
        }

        .search-input:focus {
            border-color: var(--muted);
        }

        .search-input::placeholder {
            color: var(--muted);
        }

        select.filter {
            padding: 0.6rem 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--muted);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.85rem;
            outline: none;
            cursor: pointer;
        }

        /* TABS */
        .tabs {
            display: flex;
            gap: 0;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--border);
        }

        .tab {
            padding: 0.7rem 1.5rem;
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--muted);
            cursor: pointer;
            border-bottom: 2px solid transparent;
            margin-bottom: -1px;
            transition: all 0.15s;
            background: none;
            border-top: none;
            border-left: none;
            border-right: none;
            font-family: 'DM Sans', sans-serif;
        }

        .tab:hover {
            color: var(--ink);
        }

        .tab.active {
            color: var(--ink);
            border-bottom-color: var(--accent);
        }

        /* COMMENTS LIST */
        .comments-list {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .comment-row {
            background: var(--surface);
            border: 1px solid var(--border);
            border-bottom: none;
            padding: 1.2rem 1.5rem;
            display: grid;
            grid-template-columns: 44px 1fr auto;
            gap: 1rem;
            align-items: start;
            transition: background 0.15s;
        }

        .comment-row:first-child {
            border-radius: 0;
        }

        .comment-row:last-child {
            border-bottom: 1px solid var(--border);
        }

        .comment-row:hover {
            background: var(--surface2);
        }

        .comment-row.pending {
            border-left: 3px solid var(--warning);
        }

        .comment-row.approved {
            border-left: 3px solid var(--success);
        }

        .comment-row.spam {
            border-left: 3px solid #E74C3C;
            opacity: 0.6;
        }

        .c-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
            flex-shrink: 0;
        }

        .c-meta {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 0.4rem;
            flex-wrap: wrap;
        }

        .c-author {
            font-weight: 500;
            font-size: 0.875rem;
        }

        .c-article {
            font-size: 0.75rem;
            color: var(--muted);
        }

        .c-article a {
            color: var(--accent);
            text-decoration: none;
        }

        .c-article a:hover {
            text-decoration: underline;
        }

        .c-date {
            font-size: 0.72rem;
            color: var(--muted);
        }

        .c-text {
            font-size: 0.85rem;
            color: #C8C0B4;
            line-height: 1.6;
        }

        .c-actions {
            display: flex;
            gap: 0.4rem;
            flex-shrink: 0;
            align-items: flex-start;
            padding-top: 0.2rem;
        }

        .badge {
            font-size: 0.62rem;
            font-weight: 500;
            padding: 0.2rem 0.55rem;
            border-radius: 2px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        .badge-pending {
            background: rgba(243, 156, 18, 0.15);
            color: var(--warning);
        }

        .badge-approved {
            background: rgba(39, 174, 96, 0.15);
            color: var(--success);
        }

        .badge-spam {
            background: rgba(231, 76, 60, 0.15);
            color: #E74C3C;
        }

        .pagination {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
            margin-top: 1.5rem;
        }

        .page-btn {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--muted);
            font-size: 0.8rem;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: all 0.15s;
        }

        .page-btn:hover,
        .page-btn.active {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
        }

        /* MODAL */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.75);
            z-index: 200;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.open {
            display: flex;
        }

        .modal {
            background: var(--surface);
            border: 1px solid var(--border);
            width: 560px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 1rem;
            font-weight: 500;
        }

        .modal-close {
            background: none;
            border: none;
            color: var(--muted);
            cursor: pointer;
            font-size: 1.2rem;
        }

        .modal-close:hover {
            color: var(--ink);
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 0.8rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
            margin-bottom: 1.2rem;
        }

        .form-label {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .form-control {
            padding: 0.7rem 1rem;
            background: var(--bg);
            border: 1px solid var(--border);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            outline: none;
            transition: border-color 0.2s;
            width: 100%;
        }

        .form-control:focus {
            border-color: var(--accent);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .info-row {
            display: flex;
            gap: 0.5rem;
            align-items: baseline;
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--border);
            font-size: 0.85rem;
        }

        .info-label {
            font-size: 0.7rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            min-width: 80px;
        }
    </style>
</head>

<body>

    <aside class="sidebar">
        <div class="sidebar-brand">
            <a href="index.html" class="sidebar-logo">Le Blog</a>
            <div class="sidebar-sub">Administration</div>
        </div>
        <nav class="sidebar-nav">
            <div class="nav-section-label">Vue d'ensemble</div>
            <a href="dashboard.html" class="nav-item"><span>◈</span> Dashboard</a>
            <div class="nav-section-label">Contenu</div>
            <a href="articles.html" class="nav-item"><span>✦</span> Articles <span class="nav-badge">50</span></a>
            <a href="categories.html" class="nav-item"><span>◎</span> Catégories</a>
            <a href="comments.html" class="nav-item active"><span>◇</span> Commentaires <span
                    class="nav-badge">250</span></a>
            <div class="nav-section-label">Utilisateurs</div>
            <a href="users.html" class="nav-item"><span>○</span> Utilisateurs</a>
            <div class="nav-section-label">Paramètres</div>
            <a href="settings.html" class="nav-item"><span>◻</span> Réglages</a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="u-av">A</div>
                <div>
                    <div style="font-size:0.85rem;font-weight:500">Admin</div>
                    <div style="font-size:0.7rem;color:var(--muted)">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Commentaires</div>
            <a href="index.html"
                style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                Voir le blog</a>
        </div>

        <div class="content">

            <div class="stats-row">
                <div class="stat-card">
                    <div class="stat-icon">◇</div>
                    <div class="stat-info">
                        <div class="stat-num">250</div>
                        <div class="stat-lbl">Total</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="color:var(--success)">◈</div>
                    <div class="stat-info">
                        <div class="stat-num">218</div>
                        <div class="stat-lbl">Approuvés</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="color:var(--warning)">◎</div>
                    <div class="stat-info">
                        <div class="stat-num">24</div>
                        <div class="stat-lbl">En attente</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="color:#E74C3C">✕</div>
                    <div class="stat-info">
                        <div class="stat-num">8</div>
                        <div class="stat-lbl">Spam</div>
                    </div>
                </div>
            </div>

            <div class="tabs">
                <button class="tab active">Tous (250)</button>
                <button class="tab">En attente (24)</button>
                <button class="tab">Approuvés (218)</button>
                <button class="tab">Spam (8)</button>
            </div>

            <div class="toolbar">
                <input type="search" class="search-input" placeholder="Rechercher dans les commentaires...">
                <select class="filter">
                    <option>Tous les articles</option>
                    <option>Excepturi eligendi aliquid...</option>
                    <option>Aut repellat ut qui et</option>
                    <option>Sed molestiae omnis...</option>
                </select>
                <button class="btn btn-ghost" style="margin-left:auto">Tout approuver</button>
            </div>

            <div class="comments-list">

                <div class="comment-row pending">
                    <div class="c-avatar" style="background:#E67E22;color:#fff">WR</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Weldon Walter</span>
                            <span class="badge badge-pending">En attente</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a></div>
                        <div class="c-text" style="margin-top:0.5rem">Molestiae modi minus molestiae. Perspiciatis
                            blanditiis libero earum quod eos omnis placeat nesciunt.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success" style="color:var(--success)">✓</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row pending">
                    <div class="c-avatar" style="background:#8E44AD;color:#fff">SF</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Sherman Feeney</span>
                            <span class="badge badge-pending">En attente</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Quis nemo architecto ea rerum iusto nulla. Vel
                            ut soluta ipsum nihil aut natus suscipit explicabo perspiciatis.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success">✓</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#27AE60;color:#fff">VK</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Veronica Kunze</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Iure atque aspernatur aliquid dolor id. Officiis
                            expedita pariatur aperiam commodi eligendi.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#2E86AB;color:#fff">HB</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Henriette Bode</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Omnis aut voluptates dolor et sapiente. Tenetur
                            eligendi earum qui sunt qui facilis unde iure perferendis.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#C0392B;color:#fff">DE</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Dr. Evert Yost</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Aspernatur vero ratione et qui qui architecto.
                            Aut amet repellendus totam molestiae error doloremque qui aspernatur.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row spam">
                    <div class="c-avatar" style="background:#555;color:#fff">??</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Colt Christiansen</span>
                            <span class="badge badge-spam">Spam</span>
                            <span class="c-date">17 avr. 2026 à 07:12</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sit ad perferendis possimus ut</a></div>
                        <div class="c-text" style="margin-top:0.5rem">Numquam at excepturi id. Click here to win free
                            prizes!!! Lorem ipsum dolor sit amet consectetur...</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success">Restaurer</button>
                        <button class="btn btn-danger">Suppr. déf.</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#1ABC9C;color:#fff">CC</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Julien Prohaska</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 09:44</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Excepturi eligendi aliquid iste laboriosam</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Ut reiciendis et totam animi sed commodi facere
                            amet. Voluptatem itaque aut accusamus perspiciatis fugit.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row pending">
                    <div class="c-avatar" style="background:#9B59B6;color:#fff">LH</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Lavinia Hickle</span>
                            <span class="badge badge-pending">En attente</span>
                            <span class="c-date">17 avr. 2026 à 11:22</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Aut repellat ut qui et</a></div>
                        <div class="c-text" style="margin-top:0.5rem">Debitis cumque nihil est molestias iste et.
                            Laudantium aliquam adipisci tempora suscipit voluptatem rem quos.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success">✓</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

            </div>

            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">…</button>
                <button class="page-btn">13</button>
                <button class="page-btn">→</button>
            </div>
        </div>
    </div>

    <!-- VIEW MODAL -->
    <div class="modal-overlay" id="viewModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Détail du commentaire</div>
                <button class="modal-close"
                    onclick="document.getElementById('viewModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div style="margin-bottom:1.5rem">
                    <div class="info-row"><span class="info-label">Auteur</span><span>Weldon Walter</span></div>
                    <div class="info-row"><span class="info-label">Email</span><span
                            style="color:var(--muted)">luciano.sporer@example.net</span></div>
                    <div class="info-row"><span class="info-label">Article</span><a href="#"
                            style="color:var(--accent);text-decoration:none;font-size:0.85rem">Sed molestiae omnis
                            ratione ea enim ea</a></div>
                    <div class="info-row"><span class="info-label">Date</span><span
                            style="color:var(--muted);font-size:0.85rem">17 avril 2026 à 06:35</span></div>
                    <div class="info-row"><span class="info-label">Statut</span><span class="badge badge-pending">En
                            attente</span></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Contenu du commentaire</label>
                    <textarea class="form-control">Molestiae modi minus molestiae. Perspiciatis blanditiis libero earum quod eos omnis placeat nesciunt ut ut.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('viewModal').classList.remove('open')">Fermer</button>
                <button class="btn" style="background:transparent;color:#E74C3C;border:1px solid #E74C3C">Marquer
                    spam</button>
                <button class="btn btn-primary">Approuver</button>
            </div>
        </div>
    </div>

    <script>
        function openView() {
            document.getElementById('viewModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(o => o.addEventListener('click', e => {
            if (e.target === o) o.classList.remove('open');
        }));
        document.querySelectorAll('.tab').forEach(t => t.addEventListener('click', function() {
            document.querySelectorAll('.tab').forEach(x => x.classList.remove('active'));
            this.classList.add('active');
        }));
    </script>
</body>

</html>
