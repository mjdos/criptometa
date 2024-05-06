@include('site.layouts.header')
        <!-- main content area -->
        <div class="primary-content-area content-padding">
            
            <div class="container section-padding">
                <div class="section-title-wrapper">
                    <div class="section-title"><span class="gradient-text">Explore</span> Projetos</div>
                </div>
                
                <!-- featured items grid -->
                <div class="featured-box">
                    <div class="featured-box-wrapper grid-4-columns">
                        @foreach ($projetos as $projeto)
                        <div class="featured-item v5">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{route('projeto.index', $projeto->id) }}">
                                            <img src="{{ url($projeto->imagem)}}" alt="" height="240">
                                        </a>
                                    </div>
                                    <a href="{{route('projeto.apoiar', $projeto->id)}}">
                                        <div class="fav-counter"><svg class="crumina-icon"></svg>
                                            <span class="count">Apoie esse projeto!</span>
                                        </div>
                                    </a>
                                    <div class="featured-item-info">
                                        <div class="title">
                                            <a href="{{ route('projeto.index', $projeto->id) }}">{{$projeto->nome}}</a>
                                        </div>
                                        <div class="item-meta">
                                            <span class="avatar box-26">
                                                <img src="img/avatar.png" alt="">
                                            </span>
                                            <span>@</span>{{$projeto->autor->name}}
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="header-user-profile cryptoki-notif-bttn">
                                        <a class="btn btn-wide btn-dark" href="{{route('projeto.index', $projeto->id)}}">Detalhes do projeto!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
                
        </div>
        </div>
        <!-- main content area -->
        @include('site.layouts.footer')