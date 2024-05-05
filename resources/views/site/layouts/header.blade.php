<!doctype html>
<html class="no-js" lang="en">

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

    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <link rel="stylesheet" href="css/nice-select2.css">
    <link rel="stylesheet" href="css/login-register.css">
    <link rel="stylesheet" href="css/meucss.css">
    <meta name="theme-color" content="#fafafa">

<body class="loading">
    @php
        $usuario = Session::get('usuario');
    @endphp
    <div class="main digital-store">
        <!-- mobile navigation panel -->
        <div class="mobile-nav-panel">
            <div class="mobile-nav-header">
                <div class="mobile-menu-logo logo"><a href="{{route('site.index')}}"><img src="svg/logo-ds.svg" alt="logo"></a>
                </div>
                <svg class="crumina-icon close-icon">
                    <use xlink:href="#cross-icon"></use>
                </svg>
            </div>
            <div class="mobile-menu-wrapper">
                <!-- mobile menu -->
                <ul class="mobile-menu">
                    <li class="menu-item"><a class="menu-link" href="{{route('site.index')}}">Home</a></li>
                    <li class="menu-item menu-item-has-children"><a class="menu-link" href="#">Explore
                            <span class="indicator"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-down-icon"></use>
                                </svg></span>
                        </a>
                        <ul class="submenu">
                            <li class="menu-item"><a class="menu-link" href="02-explore.html">Explore
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="04-item-versions.html">Item versions
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="07-sellers.html">Sellers</a></li>
                    <li class="menu-item menu-item-has-megamenu menu-item-has-children"><a class="menu-link"
                            href="#">All pages<span class="indicator"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-down-icon"></use>
                                </svg></span><span class="highlighted-item gradient-background">NEW</span></a>
                        <div class="megamenu">
                            <div class="megamenu-wrapper">
                                <div class="megamenu-column">
                                    <div class="megamenu-title">Main Pages</div>
                                    <div>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="{{route('site.index')}}" class="menu-link">Home</a>
                                            </li>
                                            <li class="menu-item"><a href="02-explore.html"
                                                    class="menu-link">Explore</a></li>
                                            <li class="menu-item"><a href="03-shop-category.html" class="menu-link">Shop
                                                    Category</a>
                                            </li>
                                            <li class="menu-item"><a href="04-item-versions.html" class="menu-link">Item
                                                    Versions</a>
                                            </li>
                                            <li class="menu-item"><a href="05-product.html" class="menu-link">Product
                                                    Page</a>
                                            </li>
                                            <li class="menu-item"><a href="06-profile-page.html"
                                                    class="menu-link">Profile Page</a>
                                            </li>
                                        </ul>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="07-sellers.html"
                                                    class="menu-link">Sellers</a></li>
                                            <li class="menu-item"><a href="08-shopping-cart.html"
                                                    class="menu-link">Shopping Cart</a>
                                            </li>
                                            <li class="menu-item"><a href="09-checkout.html"
                                                    class="menu-link">Checkout</a></li>
                                            <li class="menu-item"><a href="25-notifications.html"
                                                    class="menu-link">Notifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="megamenu-column">
                                    <div class="megamenu-title">Dashboard</div>
                                    <div>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="26-profile-info.html"
                                                    class="menu-link">Profile Info</a>
                                            </li>
                                            <li class="menu-item"><a href="!#" class="menu-link">Account Settings</a>
                                            </li>
                                            <li class="menu-item"><a href="!#" class="menu-link">Notification
                                                    Settings</a></li>
                                            <li class="menu-item"><a href="10-profile-dashboard.html"
                                                    class="menu-link">Dashboard</a></li>
                                            <li class="menu-item"><a href="11-profile-sales-statement.html"
                                                    class="menu-link">Sales Statement</a>
                                            </li>
                                            <li class="menu-item"><a href="12-profile-upload-item.html"
                                                    class="menu-link">Upload Item</a></li>
                                        </ul>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="13-profile-manage-items.html"
                                                    class="menu-link">Manage Items</a>
                                            </li>
                                            <li class="menu-item"><a href="14-profile-payment-history.html"
                                                    class="menu-link">Payouts</a></li>
                                            <li class="menu-item"><a href="15-profile-purchases.html"
                                                    class="menu-link">Purchases</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children"><a class="menu-link" href="#">Blog
                            <span class="indicator"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-down-icon"></use>
                                </svg></span></a>
                        <ul class="submenu">
                            <li class="menu-item"><a class="menu-link" href="16-blog-grid.html">Blog grid
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="17-blog-classic.html">Blog classic
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="18-blog-post-centered.html">Blog post
                                    centered
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="19-blog-post-sidebar.html">Blog post
                                    sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- mobile menu -->
            </div>
            <div class="mobile-nav-footer">
                <!-- currency and language switchers -->
                <div class="topbar-switchers">
                    <div class="currency-switcher">
                        <select class="select-nice">
                            <option value="eth" selected>ETHEREUM (ETH)</option>
                            <option value="euro">Euro</option>
                            <option value="usd">USD</option>
                        </select>
                    </div>
                    <div class="language-switcher">
                        <select class="select-nice">
                            <option value="english" selected>English</option>
                            <option value="french">French</option>
                            <option value="german">German</option>
                        </select>
                    </div>
                </div>
                <!-- currency and language switchers -->
                <!-- social icons list -->
                <ul class="social-icons-list">
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#facebook-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#twitter-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#instagram-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#twitch-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#discord-icon"></use>
                            </svg></a></li>
                </ul>
                <!-- social icons list -->
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
                        <a class="logo-link" href="{{ route('site.index') }}">
                            <div class="logo-img"><img src="{{ url('img/logo.png') }}" alt="logo"></div>
                            <div class="logo-text">CriptoMeta</div>
                        </a>
                    </div>
                    <!-- header logo -->
                    <!--  navigation menu -->
                    <ul class="navigation-menu">
                        <li class="menu-item"><a class="menu-link" href="{{route('site.index')}}">Inicial</a></li>
                        <li class="menu-item menu-item-has-children"><a class="menu-link" href="{{route('projeto.explorar')}}">Explorar</a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="07-sellers.html">Projetos</a></li>
                        <li class="menu-item menu-item-has-children"><a class="menu-link" href="#">Portal
                                <span class="indicator"><svg class="crumina-icon">
                                        <use xlink:href="#arrow-down-icon"></use>
                                    </svg></span></a>
                            <ul class="submenu">
                                <li class="menu-item"><a class="menu-link" href="16-blog-grid.html">Portal Normal
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="17-blog-classic.html">Portal Clássico
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="18-blog-post-centered.html">Portal Envios
                                    </a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="19-blog-post-sidebar.html">Portal  Recebidos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item hidden-menu"><a class="menu-link" href="#"><svg class="crumina-icon">
                                    <use xlink:href="#dots-icon"></use>
                                </svg></a>
                            <ul class="hidden-menu-dropdown submenu">
                                <li class="menu-item"><a href="22-faq.html" class="menu-link">Perguntas Frequentes</a></li>
                                <li class="menu-item"><a href="20-become-a-creator.html" class="menu-link">Seja um Criador</a></li>
                                <li class="menu-item"><a href="21-contact.html" class="menu-link">Entre em Contato</a></li>
                                <li class="menu-item"><a href="23-login.html" class="menu-link">Acessar ou Registrar</a></li>
                                <li class="menu-item"><a href="24-register.html" class="menu-link">Assine a Criptometa</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--  navigation menu -->
                </div>
                <div class="nav-right-hand-part">
                    <!-- user activity buttons -->
                    <div class="user-activity-buttons">
                        <!-- user mobile search button -->
                        <button id="mobile-search">
                            <svg class="crumina-icon open-button">
                                <use id="search" xlink:href="#search-icon"></use>
                            </svg>
                        </button>
                        <!-- user mobile search button -->
                        <!-- cart button -->
                        <div class="cart-button-cont">
                        <button class="cart-button cryptoki-notif-bttn" data-target="cart-dropdown">
                            <span class="counter">3</span>
                            <svg class="crumina-icon">
                                <use xlink:href="#bag-icon"></use>
                            </svg>
                        </button>
                        </div>
                        <!-- cart button -->

                        <!-- favourites buttons -->
                        <div class="favourites-button-cont">
                        <button class="favourites-button cryptoki-notif-bttn" data-target="">
                            <span class="counter">7</span>
                            <svg class="crumina-icon">
                                <use xlink:href="#heart-icon"></use>
                            </svg>
                        </button>
                        </div>
                        <!-- favourites buttons -->

                        <!--  notifications dropdown -->
                        <div class="notifications-button-cont">
                        <button class="notifications-button cryptoki-notif-bttn" data-target="notifications-dropdown">
                            <span class="counter">10</span>
                            <svg class="crumina-icon">
                                <use xlink:href="#bell-icon"></use>
                            </svg>
                        </button>
                            <div id="notifications-dropdown" class="cryptoki-notif-target">
                                <div class="title">
                                    Notifications <span class="colored">10</span>
                                </div>
                                <div class="notifications-wrapper cryptoki-scrollbar">
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-1.png"
                                                alt=""><span class="bid-type"><svg class="crumina-icon">
                                                    <use xlink:href="#annotation-icon"></use>
                                                </svg></span></div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">@JackieJ</a> just commented on
                                                <a href="05-product.html" class="bold">Cryptoki NFT and Digital Market PSD
                                                    Template</a>
                                            </div>
                                            <div class="publish-date">2 minutes ago</div>
                                        </div>
                                    </div>
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-1.png"
                                                alt=""><span class="purchase-type"><svg class="crumina-icon">
                                                    <use xlink:href="#wallet-icon"></use>
                                                </svg></span></div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">@CrimsonRay</a> just
                                                purchased<a href="05-product.html" class="bold"> Cryptoki NFT and Digital Market PSD
                                                    Template</a></div>
                                            <div class="publish-date">10 minutes ago</div>
                                        </div>
                                    </div>
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-2.png"
                                                alt=""><span class="like-type"><svg class="crumina-icon">
                                                    <use xlink:href="#heart-icon"></use>
                                                </svg></span></div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">@NoirArtks</a> just liked<a
                                                    href="#" class="bold">
                                                    Twitter Gaming Headers Pack 04</a></div>
                                            <div class="publish-date">37 minutes ago</div>
                                        </div>
                                    </div>
                                    <div class="notification">
                                        <div class="thumb-box"><img src="img/content/notifications/notif-thumb-1.png"
                                                alt=""><span class="review-type"><svg class="crumina-icon">
                                                    <use xlink:href="#star-icon"></use>
                                                </svg></span></div>
                                        <div class="notification-info">
                                            <div class="message"><a href="06-profile-page.html" class="bold">@CrimsonRay</a> just
                                                reviewed<a href="05-product.html" class="bold">
                                                    Cryptoki NFT and Digital Market PSD Template</a></div>
                                            <div class="publish-date">49 minutes ago</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="25-notifications.html" class="btn-small-fullwidth btn-dark btn-square">View all
                                    Notifications</a>
                            </div>
                        </div>
                        <!--  notifications dropdown -->
                    </div>
                    <!-- user activity buttons -->
                    <!-- header user profile -->
                    <div class="header-user-profile cryptoki-notif-bttn" data-target="profile-dropdown">
                        <div class="user-meta">

                            <div class="user_name">{{$usuario['nome'] ?? ''}}</div>
                            <!-- <div class="user_score">ETH $291.36</div> -->
                        </div>
                        <div class="avatar box-42">
                            <img src="img/avatar.png" alt="avatar"><span class="verified"><svg class="crumina-icon">
                                    <use xlink:href="#check-icon"></use>
                                </svg></span>
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
                                        <img src="img/avatar.png" alt="avatar"><span class="verified"><svg
                                                class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg></span>
                                    </div>
                                    <div class="profile-link">
                                        <a class="btn  btn-small gradient-background" href="06-profile-page.html">My
                                            Profile</a>
                                    </div>
                                </div>
                                <ul class="profile-menu">
                                    <li><a href="26-profile-info.html"><svg class="crumina-icon">
                                                <use xlink:href="#user-icon"></use>
                                            </svg>Profile Info</a></li>
                                    <li><a href="!#"><svg class="crumina-icon">
                                                <use xlink:href="#settings-icon"></use>
                                            </svg>Account Settings</a></li>
                                    <li><a href="!#"><svg class="crumina-icon">
                                                <use xlink:href="#slide-filter-icon"></use>
                                            </svg>Notification Settings</a></li>
                                    <li><a href="10-profile-dashboard.html"><svg class="crumina-icon">
                                                <use xlink:href="#dashboard-icon"></use>
                                            </svg>Dashboard</a></li>
                                    <li><a href="11-profile-sales-statement.html"><svg class="crumina-icon">
                                                <use xlink:href="#file-text-icon"></use>
                                            </svg>Sales Statement</a></li>
                                    <li><a href="12-profile-upload-item.html"><svg class="crumina-icon">
                                                <use xlink:href="#picture-icon"></use>
                                            </svg>Upload Item</a></li>
                                    <li><a href="13-profile-manage-items.html"><svg class="crumina-icon">
                                                <use xlink:href="#picture-icon"></use>
                                            </svg>Manage Items</a></li>
                                    <li><a href="14-profile-payment-history.html"><svg class="crumina-icon">
                                                <use xlink:href="#dollar-icon"></use>
                                            </svg>Payouts</a></li>
                                    <li><a href="15-profile-purchases.html"><svg class="crumina-icon">
                                                <use xlink:href="#wallet-icon"></use>
                                            </svg>Purchases</a></li>
                                    <li><a href="!#"><svg class="crumina-icon">
                                                <use xlink:href="#circle-checked-icon"></use>
                                            </svg>Get Verified</a></li>
                                    <li class="logout"><a href="!#"><svg class="crumina-icon">
                                                <use xlink:href="#logout-icon"></use>
                                            </svg>Log Out</a></li>
                                </ul>
                            </div>
                            <div class="profile-dropdown-footer">
                                <div class="mode-toggle">
                                    <div class="mode-title"><span><svg class="crumina-icon">
                                                <use xlink:href="#moon-icon"></use>
                                            </svg></span>Night-mode</div>
                                    <label class="toggle-control">
                                        <input type="checkbox" checked="checked">
                                        <span class="control"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- header user profile -->
                </div>
            </div>
            <!-- header search block -->
            <div id="mobile-search-block">
                <form  id="mobile-search-form">
                    <input type="text" class="search-input"   placeholder="Enter your search here...">
                    <button class="search-button">
                        <svg class="crumina-icon">
                            <use xlink:href="#search-icon"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- header search block -->
        </nav>

