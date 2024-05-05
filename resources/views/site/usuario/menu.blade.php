<aside>
        <div class="user-db-menu">
            <div class="user-db-header">
                <div class="user-header-user-profile">
                    <div class="avatar box-64">
                        <a href="{{route('usuario.index')}}">
                            <img src="img/avatar.png" alt="avatar"></a>
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