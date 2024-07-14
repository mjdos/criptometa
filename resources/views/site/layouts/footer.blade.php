        <!--Footer area-->
        @php
        $usuario = Session::get('usuario');
        @endphp
        <footer class="footer footer-margin">
            <div class="footer-wrapper container">

                <div class="footer-content">
                    <div class="footer-row flex-space-between align-items-center">
                        <div class="logo">
                            <a class="logo-link" href="01-home-ds.html">
                                <div class="logo-img"><img src="svg/logo-ds.svg" alt="logo"></div>
                                <div class="logo-text">CriptoMeta</div>
                            </a>
                        </div>

                    </div>
                    <br>
                    <div class="widget-content flex-space-between">
                        <div class="is-two-col-element">
                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('site.index')}}">Inicial</a>
                                </li>
                            </ul>
                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('quemsomos')}}">Quem Somos</a></li>
                            </ul>

                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('projeto.explorar')}}">Projetos</a></li>
                            </ul>

                            <ul class="footer-menu">
                                @if(isset($usuario))
                                <li class="menu-item"><a class="menu-link" href="{{route('projeto.criar')}}">Criar Projeto</a></li>
                                @else
                                <li class="menu-item"><a class="menu-link" href="{{route('site.login')}}">Criar Projeto</a></li>
                                @endif
                            </ul>

                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('contato')}}">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="widget-content flex-space-between">
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
                    </div>
                </div>
                <!--  footer content -->
                <!--  copyright section -->
                <div class="footer-copyright flex-space-between">
                    <span class="copyright-text">
                        CriptoMeta 2024 - Todos Direitos Reservados
                    </span>
                </div>
                <!--  copyright section -->
            </div>
        </footer>
        <!--Footer area-->
        </div>



        <!-- Add your site or application content here -->
        <script defer src="js/swiper-bundle.min.js"></script>
        <script defer src="js/main.js"></script>
        <script defer src="js/countdown.js"></script>
        <script defer src="js/waves.min.js"></script>
        <script async src="js/svg-loader.js"></script>
        <script defer src="js/nice-select2.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        </body>

        </html>
