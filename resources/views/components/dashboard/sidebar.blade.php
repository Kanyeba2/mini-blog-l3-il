<aside class="sidebar">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}" class="sidebar-logo">Le Blog</a>
        <div class="sidebar-sub">Atelier Cafe</div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section-label">Pilotage</div>
        <a href="{{ route('dashboard.index') }}" class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            Tableau cafe
        </a>

        <div class="nav-section-label">Carte cafe</div>
        <a href="{{ route('dashboard.articles') }}" class="nav-item {{ request()->routeIs('dashboard.articles') ? 'active' : '' }}">
            Recettes
        </a>
        <a href="{{ route('dashboard.categories') }}" class="nav-item {{ request()->routeIs('dashboard.categories') ? 'active' : '' }}">
            Origines
        </a>
        <a href="{{ route('dashboard.comments') }}" class="nav-item {{ request()->routeIs('dashboard.comments') ? 'active' : '' }}">
            Notes degustation
        </a>

        <div class="nav-section-label">Equipe</div>
        <a href="{{ route('dashboard.users') }}" class="nav-item {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
            Baristas
        </a>

        <div class="nav-section-label">Parametres</div>
        <a href="{{ route('dashboard.settings') }}" class="nav-item {{ request()->routeIs('dashboard.settings') ? 'active' : '' }}">
            Moutures
        </a>
    </nav>

    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="user-avatar">SK</div>
            <div>
                <div class="user-name">Sephora KANYEBA</div>
                <div class="user-role">Chef Barista</div>
            </div>
        </div>
    </div>
</aside>
