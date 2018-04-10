<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800" rel="stylesheet">




    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--My Styles-->
    {{-- <link rel="stylesheet" href="{{url('css/normalize.css')}}"/> --}}
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}"/>
    {{-- <link rel="stylesheet" href="{{url('css/navbar.css')}}"/> --}}
    <link rel="stylesheet" href="{{url('css/chat_styles.css')}}"/>
    <link rel="stylesheet" href="{{url('css/form_styles.css')}}"/>
    <link rel="stylesheet" href="{{url('css/posts.css')}}"/>
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/me') }}">{{ __('My Profile') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('My Posts') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
                            <div class="col-md-2">
                                <div class="all_users_sidebar">
                                    <ul class="sidebar_users">
                                        <div class="topnav">
                                            <div class="search-container">
                                                <form action="" method="post">
                                                    <input type="text" placeholder="Search..." name="search" maxlength="17">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>

                                        @foreach($data['users'] as $user)
                                        <li><a href="/profiles/{{ $user['id'] }}">
                                            <div class="user">
                                                <img src="{{url('images/users_chat/user2.jpg')}}" class="user_img img-circle">
                                                <p class="user_name">Jensen AcklesAckles</p>
                                            </div>
                                        </a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
        </main>
    </div>
    <script type="text/javascript" src="{{url('js/jQuery_3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
</body>
</html>
