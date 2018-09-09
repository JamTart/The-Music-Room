<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- link for icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- fontawesome link -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <div id="app">
      <!-- put other code for app base here -->
      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                <!--The idea is not to display the search bar and other icons until the person registers and logs in -->

                @else
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                    <!-- Home icon -->
                    <li style ="padding-right: 2.5em; " class ="nav-item">
                      <i class="fas fa-home"></i>
                    </li>
                    <!-- connections/friends icon-->
                      <li style ="padding-right: 2.5em; " class ="nav-item">
                      <i class="fas fa-user-friends"></i>
                    </li>

                    <!-- Messages icon-->

                    <li style ="padding-right: 2.5em; " class ="nav-item">
                        <i class="fas fa-comment-alt"></i>
                    </li>
                    <!-- Notifications icon -->
                    <li style ="padding-right: 2.5em; " class ="nav-item">
                      <i class="fas fa-bell"></i>
                    </li>

                    <!-- gigs icon -->
                    <li style ="padding-right: 2.5em; " class ="nav-item">
                    <i class="fas fa-music"></i>
                  </li>


                  </ul>
                  <!-- search bar  begin -->
                  <div id ="nav-search ">
                      <form class="form" >
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="padding-left: 20px; width:20em; border-radius: 40px;" id="mysearch">
                            <div class="input-group-addon" style="margin-left: -50px; z-index: 3; border-radius: 40px; background-color: transparent; border:none;">
                              <button class="btn btn-warning btn-sm" type="submit" style="border-radius: 20px; margin-top:4px;" id="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                      </form>
                  </div>
                  <!-- Search bar end -->

                  <!-- Right Side Of Navbar -->
                  @endguest
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @else
                        <li class="nav-item dropdown">

                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                      <i class="fas fa-power-off"></i>
                                  </a>


                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
