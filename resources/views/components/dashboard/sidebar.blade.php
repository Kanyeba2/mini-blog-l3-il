<aside class="sidebar">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}" class="sidebar-logo">Le Blog</a>
        <div class="sidebar-sub">Administration</div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section-label">Vue d'ensemble</div>
        <a href="{{ route('dashboard.index') }}" class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            Dashboard
        </a>

        <div class="nav-section-label">Contenu</div>
        <a href="{{ route('dashboard.articles') }}" class="nav-item {{ request()->routeIs('dashboard.articles') ? 'active' : '' }}">
            Articles
        </a>
        <a href="{{ route('dashboard.categories') }}" class="nav-item {{ request()->routeIs('dashboard.categories') ? 'active' : '' }}">
            Catégories
        </a>
        <a href="{{ route('dashboard.comments') }}" class="nav-item {{ request()->routeIs('dashboard.comments') ? 'active' : '' }}">
            Commentaires
        </a>

        <div class="nav-section-label">Utilisateurs</div>
        <a href="{{ route('dashboard.users') }}" class="nav-item {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
            Utilisateurs
        </a>

        <div class="nav-section-label">Paramètres</div>
        <a href="{{ route('dashboard.settings') }}" class="nav-item {{ request()->routeIs('dashboard.settings') ? 'active' : '' }}">
            Réglages
        </a>
    </nav>

    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="user-avatar">SK</div>
            <div>
                <div class="user-name">Sephora KANYEBA</div>
                <div class="user-role">Administratrice</div>
            </div>
        </div>
    </div>
</aside>
