<aside>
        <div class="user-db-menu">
            <div class="user-db-header">
                <div class="user-db-cover-image profile-cover-image"></div>
                <div class="user-header-user-profile">
                    <div class="avatar box-64">
                        <a href="{{route('usuario.index')}}">
                            <img src="img/avatar.png" alt="avatar"><span class="verified"><svg class="crumina-icon">
                                    <use xlink:href="#check-icon"></use>
                                </svg></span></a>
                    </div>
                    <div class="title"><a href="{{route('usuario.index')}}">Dexter Stark</a></div>
                    <div class="item-meta"><span class="gradient-text">@DexterStark</span></div>
                </div>
            </div>
            <div class="user-db-body">
                <ul class="profile-menu">
                    <li><a href="{{route('usuario.index')}}"><svg class="crumina-icon">
                                <use xlink:href="#user-icon"></use>
                            </svg>Profile Info</a>
                        </li>
                    
                    <li><a href="{{route('projeto.criar')}}"><svg class="crumina-icon">
                                <use xlink:href="#picture-icon"></use>
                            </svg>Criar Projeto</a></li>
                    
                    <li class="logout"><a href="!#"><svg class="crumina-icon">
                                <use xlink:href="#logout-icon"></use>
                            </svg>Sair</a></li>
                </ul>
            </div>
        </div>
    </aside>