<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('assets/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('assets/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('assets/favicons/favicon-16x16.png') }}">
    <title>@yield('dashboardtitle')</title>

    <!-- Fonts -->
    @vite(['resources/js/app.js'])
    @yield('admin_styles')
</head>
<body>
    <div id="app">
        <section id="message">

        </section>
        @auth
            <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item fry_nav">
                                <a class="nav-link  {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="nav-item fry_nav">
                                <a class="nav-link {{ (request()->is('dashboard/projects')) ? 'active' : '' }}" href="{{ route('dashboard.projects') }}">Projects</a>
                            </li>
                            <li class="nav-item fry_nav">
                                <a class="nav-link  {{ (request()->is('dashboard/site')) ? 'active' : '' }}" href="{{ route('home') }}">Site</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a  class="dropdown-item" href="/">Settings</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endauth
        <main>
            <div class="dashboardHeading @yield("dashboardHeading_style")">
                <div class="container dashboard-heading">
                    @yield('dashboardheading')
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
    @yield('scripts')
</body>
</html>
