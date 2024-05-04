<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Arquivo Nacional</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    
    <link rel="stylesheet" href="{{ url('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select2.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/login-register.css')}}">

    <meta name="theme-color" content="#fafafa">

    <style>
        .gradiente-text {
            font-size: 32px;
            font-weight: bold;
            background: linear-gradient(to right, #333333, #C4EB00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline;
        }
    </style>
</head>

<body class="loading">
    <div class="main digital-store">
        <nav class="border-bottom nav-ds smart-sticky">
            <div class="navigation-wrapper container flex-space-between align-items-center">
                <div class="nav-left-hand-part">
                    <img src="{{ url('assets/img/logo-pequeno.png') }}" alt="logo" height="120" style="margin-right: 60px;">

                    <!--  navigation menu -->
                    <ul class="navigation-menu">
                        <li class="menu-item"><a class="menu-link" href="{{route('home')}}">Home</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('ranking')}}">Ranking</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('ntf.index')}}">Market Place</a></li>
                    </ul>
                    <!--  navigation menu -->
                </div>
                <div class="nav-right-hand-part">
                    <!-- user activity buttons -->
                    <div class="user-activity-buttons">
           
                        <!-- user mobile search button -->
                        <!--  notifications dropdown -->
                        <div class="notifications-button-cont">
                        <button class="notifications-button cryptoki-notif-bttn" data-target="notifications-dropdown">
                            <span class="counter">3</span>
                            <svg class="crumina-icon">
                                <use xlink:href="#bell-icon"></use>
                            </svg>
                        </button>
                            <div id="notifications-dropdown" class="cryptoki-notif-target">
                                <div class="title">
                                    Notificação <span class="colored">3</span>
                                </div>
                                <div class="notifications-wrapper cryptoki-scrollbar">
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-1.png" alt="">
                                            <span class="bid-type">
                                                <svg class="crumina-icon"><use xlink:href="#annotation-icon"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">@joao</a> Ultrapassou você
                                                <a href="05-product.html" class="bold">Agora voçê esta em segundo lugar</a>
                                            </div>
                                            <div class="publish-date">2 minutos atrás</div>
                                        </div>
                                    </div>
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-1.png" alt=""><span class="purchase-type">
                                            <svg class="crumina-icon"><use xlink:href="#wallet-icon"></use>
                                            </svg></span>
                                        </div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">@CrimsonRay</a>Está se aproximando
                                                <a href="05-product.html" class="bold">Está apenas a 10 demandas atrás de voçê</a>
                                            </div>
                                            <div class="publish-date">10 minutos atrás</div>
                                        </div>
                                    </div>
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-2.png" alt="">
                                            <span class="like-type">
                                                <svg class="crumina-icon"><use xlink:href="#heart-icon"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">Nova demanda</a> Foi adicionado uma demanda que combina com seu perfil
                                                <a href="#" class="bold">Ver demanda</a>
                                            </div>
                                            <div class="publish-date">37 minutos atrás</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="25-notifications.html" class="btn-small-fullwidth btn-dark btn-square">Ver todas notificações</a>
                            </div>
                        </div>
                        <!--  notifications dropdown -->
                    </div>
                    <!-- user activity buttons -->
                    <!-- header user profile -->
                    <div class="header-user-profile cryptoki-notif-bttn" data-target="profile-dropdown">
                        <div class="user-meta">
                            <div class="user_name">Admin</div>
                            <div class="user_score"></div>
                        </div>
                        <div class="avatar box-42">
                            @if (Session::get('usuario'))
                                <img src="{{ url('assets/img/avatar.png')}}" alt="avatar">
                            @else
                                <img src="{{ url('assets/img/avatar2.png')}}" alt="avatar">
                                
                            @endif
                            
                            <span class="verified">
                                <svg class="crumina-icon">
                                    <use xlink:href="#check-icon"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="closing-icon">
                            <svg class="crumina-icon close-icon">
                                <use xlink:href="#cross-icon"></use>
                            </svg>
                        </div>
                        <div id="profile-dropdown" class="cryptoki-notif-target">
                            <div class="profile-dropdown-header profile-cover-image"></div>
                            <div class="profile-dropdown-body">
                                <div class="profile-heading">
                                    <div class="profile-avatar avatar box-26">
                                    @if (Session::get('usuario'))
                                        <img src="{{ url('assets/img/avatar.png')}}" alt="avatar">
                                    @else
                                        <img src="{{ url('assets/img/avatar2.png')}}" alt="avatar">
                                        
                                    @endif
                                        <span class="verified">
                                            <svg class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="profile-link">
                                        <a class="btn  btn-small gradient-background" href="06-profile-page.html">Meu Perfil</a>
                                    </div>
                                </div>
                                <ul class="profile-menu">
                                    <li>
                                        <a href="!#"><svg class="crumina-icon">
                                            <use xlink:href="#settings-icon"></use>
                                            </svg>Configuração de Conta
                                        </a>
                                    </li>
                                    <li>
                                        <a href="14-profile-payment-history.html"><svg class="crumina-icon">
                                            <use xlink:href="#dollar-icon"></use>
                                            </svg>Pagamentos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="15-profile-purchases.html"><svg class="crumina-icon">
                                            <use xlink:href="#wallet-icon"></use>
                                            </svg>Carteira
                                        </a>
                                    </li>

                                    <li class="logout">
                                        <a href="{{ route('logout_site')}}">
                                            <svg class="crumina-icon">
                                            <use xlink:href="#logout-icon"></use>
                                            </svg>Sair
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header user profile -->
                </div>
            </div>
        </nav>
