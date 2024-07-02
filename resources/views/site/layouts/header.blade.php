<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>CriptoMeta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('img/favicon02.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('img/favicon02.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/favicon02.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.7/jquery.inputmask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <link href="{{ url ('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <link rel="stylesheet" href="css/nice-select2.css">
    <link rel="stylesheet" href="css/login-register.css">
    <meta name="theme-color" content="#fafafa">

<body class="loading">
    @php
    $usuario = Session::get('usuario');
    @endphp
    <div class="main digital-store">
        <!-- mobile navigation panel -->
        <div class="mobile-nav-panel">
            <div class="mobile-nav-header">
                <div class="mobile-menu-logo logo"><a href="{{route('site.home')}}"><img src="svg/logo-ds.svg" alt="logo"></a>
                </div>
                <svg class="crumina-icon close-icon">
                    <use xlink:href="#cross-icon"></use>
                </svg>
            </div>
            <div class="mobile-menu-wrapper">
                <!-- mobile menu -->
                <ul class="mobile-menu">
                    <li class="menu-item"><a class="menu-link" href="{{route('site.home')}}">Inicial</a></li>
                    <ul class="submenu">
                        <li class="menu-item"><a class="menu-link" href="{{route('projeto.explorar')}}">Projetos</a></li>
                    </ul>
                    </li>
                </ul>
                <!-- mobile menu -->
            </div>
        </div>
        <!-- mobile navigation panel -->
        <!-- header navigation -->
        <nav class="border-bottom nav-ds smart-sticky">
            <div class="navigation-wrapper container flex-space-between align-items-center">
                <div class="nav-left-hand-part">
                    <!-- mobile panel burger icon -->
                    <div class="burger-icon">
                        <svg class="crumina-icon">
                            <use xlink:href="#menu-icon"></use>
                        </svg>
                    </div>
                    <!-- mobile panel burger icon -->
                    <!-- header logo -->
                    <div class="logo">
                        <a class="logo-link" href="{{ route('site.home') }}">
                            <div class="logo-img"><img src="{{ url('img/logo.png') }}" alt="logo"></div>
                            <div class="logo-text">CriptoMeta</div>
                        </a>
                    </div>
                    <!-- header logo -->
                    <!--  navigation menu -->
                    <ul class="navigation-menu">
                        <li class="menu-item"><a class="menu-link" href="{{route('site.home')}}">Inicial</a></li>
                        <li class="menu-item menu-item-has-children"><a class="menu-link" href="{{route('quemsomos')}}">Quem Somos</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('projeto.explorar')}}">Projetos</a></li>
                        @if(isset($usuario))
                        <li class="menu-item"><a class="menu-link" href="{{route('projeto.criar')}}">Criar Projeto</a></li>
                        @else
                        <li class="menu-item"><a class="menu-link" href="{{route('site.login')}}">Criar Projeto</a></li>
                        @endif
                        <li class="menu-item"><a class="menu-link" href="{{route('contato')}}">Contato</a></li>
                    </ul>
                    <!--  navigation menu -->
                </div>
                <div class="nav-right-hand-part">

                    <!-- user activity buttons -->
                    <!-- header user profile -->
                    @if(isset($usuario))
                    <div class="header-user-profile cryptoki-notif-bttn" data-target="profile-dropdown">

                        <div class="user-meta">

                            <div class="user_name">{{$usuario['nome'] ?? ''}}</div>
                            <!-- <div class="user_score">ETH $291.36</div> -->
                        </div>
                        <div class="avatar box-42">
                            <img src="{{ asset('storage/' .$usuario['photo']) ?? url('img/logo.png')}}" alt="avatar">
                        </div>

                        <div id="profile-dropdown" class="cryptoki-notif-target">
                            <div class="profile-dropdown-header profile-cover-image"></div>
                            <div class="profile-dropdown-body">
                                <div class="profile-heading">
                                    <div class="profile-avatar avatar box-26">
                                        <img src="{{ asset('storage/' .$usuario['photo']) ?? url('img/logo.png')}}" alt="avatar">
                                    </div>
                                </div>
                                <ul class="profile-menu">
                                    <li><a href="{{route('usuario.index')}}"><svg class="crumina-icon">
                                                <use xlink:href="#user-icon"></use>
                                            </svg>Perfil</a></li>
                                    <li><a href="{{route('projeto.criar')}}"><svg class="crumina-icon">
                                                <use xlink:href="#picture-icon"></use>
                                            </svg>Criar Projeto</a></li>
                                    <li><a href="{{  route('meus_projetos', $usuario['id'])}}"><svg class="crumina-icon">
                                                <!-- <li><a href="{{route('usuario.projetos')}}"><svg class="crumina-icon"> -->
                                                <use xlink:href="#dashboard-icon"></use>
                                            </svg>Meus Projetos</a></li>
                                    <li><a href="{{  route('meus_investimentos', $usuario['id'])}}"><svg class="crumina-icon">
                                                <use xlink:href="#dollar-icon"></use>
                                            </svg>Meus Investimentos</a></li>
                                    <li><a href="{{ route('usuario.carteira') }}"><svg class="crumina-icon">
                                                <use xlink:href="#wallet-icon"></use>
                                            </svg>Minha Carteira</a></li>
                                    <li class="logout"><a href="{{route('gestao_logout')}}"><svg class="crumina-icon">
                                                <use xlink:href="#logout-icon"></use>
                                            </svg>Sair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="header-user-profile cryptoki-notif-bttn">
                        <a class="btn btn-wide btn-dark" href="{{route('site.login')}}">Login</a>
                    </div>
                    @endif

                </div>
            </div>
            <!-- header search block -->
            <div id="mobile-search-block">
                <form id="mobile-search-form">
                    <input type="text" class="search-input" placeholder="Enter your search here...">
                    <button class="search-button">
                        <svg class="crumina-icon">
                            <use xlink:href="#search-icon"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- header search block -->
        </nav>

