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
                                    <a href="{{route('projeto.apoiar', $projeto->id)}}"> <div class="fav-counter"><svg class="crumina-icon">
                                          
                                        </svg><span class="count">Apoie esse projeto!</span></div></a>
                                    <div class="featured-item-image">
                                        <a href="{{ route('projeto.index', $projeto->id) }}">
                                            <img src="{{$projeto->imagem}}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="title"><a href="{{ route('projeto.index', $projeto->id) }}">{{$projeto->nome}}</a>
                                        </div>
                                        <div class="item-meta"><span class="avatar box-26"><a
                                                    href="/cryptoki-html/"><img src="img/avatar.png" alt=""></a><span
                                                    class="verified"><svg class="crumina-icon">
                                                        <use xlink:href="#check-icon"></use>
                                                    </svg></span></span> <span>@</span>{{$projeto->autor->name}}</div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="item-rating">
                                        @php
                                            $filledStars = $projeto->rating; // Número aleatório de estrelas preenchidas (vindo do modelo)
                                            $emptyStars = 5 - $filledStars; // Calcula o número de estrelas vazias
                                        @endphp
                                
                                        @for ($i = 0; $i < $filledStars; $i++)
                                            <span class="filled">
                                                <svg class="crumina-icon">
                                                    <use xlink:href="#star2-icon"></use>
                                                </svg>
                                            </span>
                                        @endfor
                                
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <span>
                                                <svg class="crumina-icon">
                                                    <use xlink:href="#star2-icon"></use>
                                                </svg>
                                            </span>
                                        @endfor
                                    </div>
                                    <div class="item-price">${{$projeto->carteira}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--   item version 06 -->
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