<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles — Dashboard</title>
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

        .user-avatar {
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

        .user-name {
            font-size: 0.85rem;
            font-weight: 500;
        }

        .user-role {
            font-size: 0.7rem;
            color: var(--muted);
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
            letter-spacing: 0.05em;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
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

        .btn-danger {
            background: transparent;
            color: #E74C3C;
            border: 1px solid #E74C3C;
            font-size: 0.75rem;
            padding: 0.35rem 0.8rem;
        }

        .btn-danger:hover {
            background: #E74C3C;
            color: #fff;
        }

        .btn-edit {
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
            font-size: 0.75rem;
            padding: 0.35rem 0.8rem;
        }

        .btn-edit:hover {
            color: var(--ink);
            border-color: var(--muted);
        }

        .content {
            padding: 2rem;
            flex: 1;
        }

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

        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            font-size: 0.65rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--muted);
            padding: 0.9rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 0.9rem 1.5rem;
            font-size: 0.85rem;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: var(--surface2);
        }

        .badge {
            font-size: 0.63rem;
            font-weight: 500;
            padding: 0.25rem 0.6rem;
            border-radius: 2px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            white-space: nowrap;
        }

        .badge-published {
            background: rgba(39, 174, 96, 0.15);
            color: var(--success);
        }

        .badge-draft {
            background: rgba(136, 136, 136, 0.15);
            color: var(--muted);
        }

        .text-muted {
            color: var(--muted);
            font-size: 0.8rem;
        }

        .truncate {
            max-width: 280px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .pagination {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
            padding: 1.2rem 1.5rem;
            border-top: 1px solid var(--border);
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
            background: rgba(0, 0, 0, 0.7);
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
            width: 640px;
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
            line-height: 1;
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
            border-color: var(--muted);
        }

        .form-control[required]:focus {
            border-color: var(--accent);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 140px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .required {
            color: var(--accent);
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
            <a href="dashboard.html" class="nav-item">
                <span>◈</span> Dashboard
            </a>
            <div class="nav-section-label">Contenu</div>
            <a href="articles.html" class="nav-item active">
                <span>✦</span> Articles <span class="nav-badge">50</span>
            </a>
            <a href="categories.html" class="nav-item"><span>◎</span> Catégories</a>
            <a href="#" class="nav-item"><span>◇</span> Commentaires <span class="nav-badge">250</span></a>
            <div class="nav-section-label">Utilisateurs</div>
            <a href="users.html" class="nav-item"><span>○</span> Utilisateurs</a>
            <div class="nav-section-label">Paramètres</div>
            <a href="#" class="nav-item"><span>◻</span> Réglages</a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="user-avatar">A</div>
                <div>
                    <div class="user-name">Admin</div>
                    <div class="user-role">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Articles</div>
            <div style="display:flex;gap:0.8rem">
                <a href="index.html"
                    style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                    Voir le blog</a>
                <button class="btn btn-primary" onclick="document.getElementById('createModal').classList.add('open')">+
                    Nouvel article</button>
            </div>
        </div>

        <div class="content">
            <div class="toolbar">
                <input type="search" class="search-input" placeholder="Rechercher un article...">
                <select class="filter">
                    <option>Toutes les catégories</option>
                    <option>Vitae</option>
                    <option>Dignissimos</option>
                    <option>Optio</option>
                    <option>Aperiam</option>
                    <option>Tenetur</option>
                </select>
                <select class="filter">
                    <option>Tous les statuts</option>
                    <option>Publié</option>
                    <option>Brouillon</option>
                </select>
            </div>

            <div class="panel">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Catégorie</th>
                            <th>Auteur</th>
                            <th>Statut</th>
                            <th>Publié le</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted">1</td>
                            <td class="truncate">Sed molestiae omnis ratione ea enim ea</td>
                            <td class="text-muted">Vitae</td>
                            <td class="text-muted">Annetta Runolfsson</td>
                            <td><span class="badge badge-published">Publié</span></td>
                            <td class="text-muted">21 jan. 2012</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">2</td>
                            <td class="truncate">Sit ad perferendis possimus ut</td>
                            <td class="text-muted">Vitae</td>
                            <td class="text-muted">Janet Davis</td>
                            <td><span class="badge badge-published">Publié</span></td>
                            <td class="text-muted">20 nov. 1996</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">3</td>
                            <td class="truncate">Veniam maxime autem enim</td>
                            <td class="text-muted">Vitae</td>
                            <td class="text-muted">Madalyn Lowe</td>
                            <td><span class="badge badge-published">Publié</span></td>
                            <td class="text-muted">1 oct. 1990</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">4</td>
                            <td class="truncate">Tempora aut et incidunt ad ipsa</td>
                            <td class="text-muted">Vitae</td>
                            <td class="text-muted">Alena Heathcote</td>
                            <td><span class="badge badge-draft">Brouillon</span></td>
                            <td class="text-muted">—</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">5</td>
                            <td class="truncate">Cumque itaque dolorum non est praesentium</td>
                            <td class="text-muted">Vitae</td>
                            <td class="text-muted">Brennan Purdy II</td>
                            <td><span class="badge badge-draft">Brouillon</span></td>
                            <td class="text-muted">—</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">27</td>
                            <td class="truncate">Excepturi eligendi aliquid iste laboriosam et soluta cum</td>
                            <td class="text-muted">Optio</td>
                            <td class="text-muted">Jacklyn Lueilwitz</td>
                            <td><span class="badge badge-published">Publié</span></td>
                            <td class="text-muted">15 jul. 2015</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">31</td>
                            <td class="truncate">Aut repellat ut qui et</td>
                            <td class="text-muted">Aperiam</td>
                            <td class="text-muted">Dr. Travon Kirlin</td>
                            <td><span class="badge badge-published">Publié</span></td>
                            <td class="text-muted">8 oct. 2019</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">50</td>
                            <td class="truncate">Sed laudantium facilis dolore non sunt</td>
                            <td class="text-muted">Tenetur</td>
                            <td class="text-muted">Esteban Murphy</td>
                            <td><span class="badge badge-published">Publié</span></td>
                            <td class="text-muted">4 nov. 1980</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit()">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">4</button>
                    <button class="page-btn">5</button>
                    <button class="page-btn">→</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CREATE MODAL -->
    <div class="modal-overlay" id="createModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Nouvel article</div>
                <button class="modal-close"
                    onclick="document.getElementById('createModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Titre <span class="required">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Titre de l'article"
                        required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="slug-de-l-article">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Catégorie <span class="required">*</span></label>
                        <select class="form-control" name="category_id" required>
                            <option value="">— Choisir —</option>
                            <option value="1">Vitae</option>
                            <option value="2">Dignissimos</option>
                            <option value="3">Optio</option>
                            <option value="4">Aperiam</option>
                            <option value="5">Tenetur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Auteur <span class="required">*</span></label>
                        <select class="form-control" name="user_id" required>
                            <option value="">— Choisir —</option>
                            <option value="6">Annetta Runolfsson</option>
                            <option value="132">Jacklyn Lueilwitz</option>
                            <option value="186">Dr. Travon Kirlin</option>
                            <option value="246">Mrs. Tia Lemke</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Contenu <span class="required">*</span></label>
                    <textarea class="form-control" name="content" placeholder="Contenu de l'article..." required></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Date de publication</label>
                    <input type="datetime-local" class="form-control" name="published_at">
                    <small style="color:var(--muted);font-size:0.72rem;margin-top:0.3rem">Laisser vide pour enregistrer
                        en brouillon</small>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('createModal').classList.remove('open')">Annuler</button>
                <button class="btn btn-primary">Créer l'article</button>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal-overlay" id="editModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Modifier l'article</div>
                <button class="modal-close"
                    onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Titre <span class="required">*</span></label>
                    <input type="text" class="form-control" name="title"
                        value="Sed molestiae omnis ratione ea enim ea" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug"
                        value="sed-molestiae-omnis-ratione-ea-enim-ea-2071">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Catégorie <span class="required">*</span></label>
                        <select class="form-control" name="category_id" required>
                            <option value="1" selected>Vitae</option>
                            <option value="2">Dignissimos</option>
                            <option value="3">Optio</option>
                            <option value="4">Aperiam</option>
                            <option value="5">Tenetur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Auteur <span class="required">*</span></label>
                        <select class="form-control" name="user_id" required>
                            <option value="6" selected>Annetta Runolfsson</option>
                            <option value="132">Jacklyn Lueilwitz</option>
                            <option value="186">Dr. Travon Kirlin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Contenu <span class="required">*</span></label>
                    <textarea class="form-control" name="content" required>Aut amet eum voluptatem voluptatem quibusdam tempore. Quod non delectus iste. Quos quo et qui. Ullam adipisci deserunt sit velit quam quia consequatur.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Date de publication</label>
                    <input type="datetime-local" class="form-control" name="published_at" value="2012-01-21T16:27">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('editModal').classList.remove('open')">Annuler</button>
                <button class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>

    <script>
        function openEdit() {
            document.getElementById('editModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', e => {
                if (e.target === overlay) overlay.classList.remove('open');
            });
        });
    </script>
</body>

</html>
