<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.7
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | Admin Panel</title>
    <!-- Icons-->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('/admin/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    @yield('style')
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">
        <img class="navbar-brand-full" src="{{ url('/admin/img/brand/logo.svg') }}" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{ url('/admin/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="{{ route('adminPanel') }}">Admin Panel</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{ route('welcome') }}">Home Page</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ url('/admin/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
        <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('adminPanel') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-title">Film</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('films.create') }}">
                <i class="nav-icon icon-plus"></i> Add Film</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('films.index') }}">
                <i class="nav-icon icon-film"></i> Films List</a>
            </li>
            <li class="nav-title">Genre</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('genres.create') }}">
                <i class="nav-icon icon-plus"></i> Add Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('genres.index') }}">
                <i class="nav-icon icon-emotsmile"></i> Genres List</a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item">
            <a href="{{ route('adminPanel') }}">Admin Panel</a>
          </li>
          <li class="breadcrumb-item active">{{ \Request::route()->getName() }}</li>
          <!-- Breadcrumb Menu-->
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
              @yield('content')
          </div>
        </div>
      </main>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/admin.js') }}" defer></script>
    @yield('script')
  </body>
</html>
