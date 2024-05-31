<aside>
    <div class="user-db-menu">
        <div class="user-db-header">
            <div class="user-header-user-profile">
                <div class="avatar box-64">
                    <a href="{{route('usuario.index')}}">
                        @if ($usuario->photo)
                        <img src="{{ asset('storage/' . $usuario->photo) }}" alt="Foto do Perfil"> @else <img src="img/avatar.png" alt="avatar">
                        @endif

                    </a>
                </div>
                <div class="title"><a href="{{route('usuario.index')}}">{{$usuario['nome'] ?? ''}}</a></div>
                <div class="item-meta"><span class="gradient-text">{{$usuario['email'] ?? ''}}</span></div>
            </div>
        </div>
        <div class="user-db-body">
            <ul class="profile-menu">

                <li><a href="{{route('usuario.index')}}"><svg class="crumina-icon">
                            <use xlink:href="#user-icon"></use>
                        </svg>Perfil</a></li>
                <li><a href="{{route('usuario_endereco.index')}}">
                        <?xml version="1.0" encoding="utf-8" ?>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->

                        <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 117.55" style="enable-background:new 0 0 122.88 117.55" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill-rule: evenodd;
                                    clip-rule: evenodd;
                                }

                            </style>
                            <g>
                                <path class="st0" d="M78.81,82.78c-4.35,4.77-9.42,9.05-15.12,12.51c-0.7,0.51-1.65,0.58-2.43,0.08 c-8.41-5.35-15.48-11.78-21.03-18.76c-7.66-9.61-12.49-20.27-14.14-30.53c-1.68-10.41-0.11-20.42,5.07-28.56 c2.04-3.22,4.65-6.15,7.83-8.68C46.3,3.01,54.65-0.06,62.96,0c8.01,0.06,15.91,3.05,22.74,9.28c2.4,2.18,4.42,4.68,6.07,7.39 c5.57,9.17,6.77,20.87,4.32,32.73c-2.41,11.71-8.41,23.62-17.28,33.35V82.78L78.81,82.78L78.81,82.78z M25.32,74.54 c1.98,0,3.59,1.61,3.59,3.59c0,1.98-1.61,3.59-3.59,3.59h-6.74l-8.88,28.67h103.22l-9.64-28.67h-5.57c-1.98,0-3.59-1.61-3.59-3.59 c0-1.98,1.61-3.59,3.59-3.59h10.7l14.46,43.01H0l13.32-43.01H25.32L25.32,74.54z M61.38,18.51c9.88,0,17.88,8.01,17.88,17.87 c0,9.88-8.01,17.88-17.88,17.88c-9.88,0-17.87-8-17.87-17.88C43.49,26.51,51.5,18.51,61.38,18.51L61.38,18.51L61.38,18.51z" />
                            </g>
                        </svg>Endereço</a></li>
                <li><a href="{{route('projeto.criar')}}"><svg class="crumina-icon">
                            <use xlink:href="#picture-icon"></use>
                        </svg>Criar Projeto</a></li>
                <li><a href="{{route('usuario.projetos')}}"><svg class="crumina-icon">
                            <use xlink:href="#dashboard-icon"></use>
                        </svg>Meus Projetos</a></li>
                <li><a href="#"><svg class="crumina-icon">
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
</aside>
