<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    @php
        $topbarTitle = trim($__env->yieldContent('topbar_title')) ?: 'Dashboard';
    @endphp

    @include('components.dashboard.sidebar')

    <div class="main">
        @include('components.dashboard.topbar', ['title' => $topbarTitle])

        <div class="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
