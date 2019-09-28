<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('js.init')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="app" class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand" style="border: none">
        <!-- Left navbar links -->
        <ul class="navbar-nav nav_button">
            <li class="nav-item sidebar_button">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <a class="navbar-brand logo" href="/"><img src="{{ asset('images/logo.png') }}" alt=""> <span>ProfStat</span></a>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="link login" href="{{ route('login') }}">{{ __('passwords.Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="link register" href="{{ route('register') }}">{{ __('passwords.Register') }}</a>
                    </li>
                @endif
            @else
            <!-- Authentication Links -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="username dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('messages.Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            <li class="nav-item dropdown">
                <a id="navbarLocaleDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ strtoupper(app()->getLocale()) }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="navbarLocaleDropdown">
                    <a class="dropdown-item" href="{{ url('locale/en') }}">EN</a>
                    <a class="dropdown-item" href="{{ url('locale/ru') }}">RU</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    @if (Auth::check())
    <aside class="main-sidebar elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="{{ url('/') }}">
                        <span class="brand-text" style="font-size:30px; color: #009cae">{{ config('app.name', 'ProfStat') }}</span>
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @if(auth()->user()->hasAnyRole(['admin', 'institute', 'employer']))
                    <li class="nav-item">
                        <a href="{{ route('students.index') }}" class="nav-link{{ Request::segment(1) === 'students' ? ' active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>{{ __('messages.Students') }}</p>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </aside>
    @else
        @include('js.hide_sidebar')
    @endif
    <!-- /.sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="footer_content">
            <div class="text">Copyright &copy; 2019-{{ (new DateTime())->format('Y') }} Quinta, LLC.<br> All rights reserved.</div>
            <a class="logo" href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a><br>
        </div>
    </footer>
</div>
<!-- ./wrapper -->



</body>
