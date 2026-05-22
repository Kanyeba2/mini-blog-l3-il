<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories — Dashboard</title>
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

        .grid-layout {
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 2rem;
        }

        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
        }

        .panel-header {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-title {
            font-size: 0.875rem;
            font-weight: 500;
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

        .text-muted {
            color: var(--muted);
            font-size: 0.8rem;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
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

        .required {
            color: var(--accent);
        }

        .form-hint {
            font-size: 0.72rem;
            color: var(--muted);
        }

        .panel-body {
            padding: 1.5rem;
        }

        .cat-count {
            background: var(--surface2);
            color: var(--muted);
            font-size: 0.72rem;
            padding: 0.2rem 0.6rem;
            border-radius: 2px;
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
            width: 480px;
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
            <a href="categories.html" class="nav-item active"><span>◎</span> Catégories</a>
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
                    <div style="font-size:0.85rem;font-weight:500">Admin</div>
                    <div style="font-size:0.7rem;color:var(--muted)">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Catégories</div>
            <a href="index.html"
                style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                Voir le blog</a>
        </div>

        <div class="content">
            <div class="grid-layout">

                <!-- LISTE -->
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Toutes les catégories (5)</div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Articles</th>
                                <th>Créée le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted">1</td>
                                <td><strong>Vitae</strong></td>
                                <td class="text-muted">vitae</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Vitae','vitae')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">2</td>
                                <td><strong>Dignissimos</strong></td>
                                <td class="text-muted">dignissimos</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Dignissimos','dignissimos')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">3</td>
                                <td><strong>Optio</strong></td>
                                <td class="text-muted">optio</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Optio','optio')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">4</td>
                                <td><strong>Aperiam</strong></td>
                                <td class="text-muted">aperiam</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Aperiam','aperiam')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">5</td>
                                <td><strong>Tenetur</strong></td>
                                <td class="text-muted">tenetur</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Tenetur','tenetur')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- CREATE FORM -->
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Nouvelle catégorie</div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="form-label">Nom <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Nom de la catégorie"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug"
                                placeholder="slug-de-la-categorie">
                            <div class="form-hint" style="margin-top:0.3rem">Généré automatiquement depuis le nom si
                                laissé vide.</div>
                        </div>
                        <button class="btn btn-primary" style="width:100%;margin-top:0.5rem">Créer la
                            catégorie</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal-overlay" id="editModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Modifier la catégorie</div>
                <button class="modal-close"
                    onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Nom <span class="required">*</span></label>
                    <input type="text" class="form-control" id="edit-name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" id="edit-slug">
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
        function openEditCat(name, slug) {
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-slug').value = slug;
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
