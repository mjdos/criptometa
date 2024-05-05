@include('site.layouts.header')
        <!-- main content area -->
        <div class="primary-content-area content-padding">
            
            <div class="container section-padding">
                <div class="section-title-wrapper">
                    <div class="section-title"><span class="gradient-text">Explore</span> Projetos</div>
                </div>
                
                <!-- featured items grid -->
                <div class="featured-box">
                @foreach ($projetos as $projeto)
                    <div class="featured-box-wrapper grid-4-columns">
                        <div class="featured-item v5">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="fav-counter"><svg class="crumina-icon">
                                            <use xlink:href="#heart-icon"></use>
                                        </svg><span class="count">total de apoiadores aqui xx</span></div>
                                    <div class="featured-item-image">
                                        <a href="{{route('projeto.index')}}">
                                            <img src="{{ url($projeto->imagem) }}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category social-graphics">
                                            tipo do projeto vai aqui
                                        </div>
                                        <div class="title"><a href="{{route('projeto.index')}}">{{$projeto->nome}}</a>
                                        </div>
                                        <div class="item-meta"><span class="avatar box-26"><a
                                                    href="06-profile-page.html"><img src="img/avatar.png"
                                                        alt=""></a><span class="verified"><svg class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span></span>@autor do projeto vai aqui</div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="item-price">$Meta do projeto vai aqui</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="pagination-section flex-center">
                        <ul class="pagination-list">
                            <li class="page-item page-nav-prev"><a href="#">Prev</a></li>
                            <li class="page-item"><a href="#">01</a></li>
                            <li class="page-item"><a href="#">02</a></li>
                            <li class="page-item"><a href="#">03</a></li>
                            <li class="page-item page-more-link"><a href="#">...</a></li>
                            <li class="page-item"><a href="#">16</a></li>
                            <li class="page-item page-nav-next"><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- main content area -->
        @include('site.layouts.footer')