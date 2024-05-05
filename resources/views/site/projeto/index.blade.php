@include('site.layouts.header')
</Style>
        <!-- main content area -->
        <div class="primary-content-area container content-padding product-page-ds">
            <div class="main-content-area product-ds">
                <div class="product-title-section">
                    <h2>{{$projeto->nome}}</h2>
                    <div class="product-subtitle">
                        <div class="product-author">
                            <span class="avatar box-26">
                                <a href="06-profile-page.html"><img src="img/avatar.png" alt=""></a>
                                <span class="verified">
                                    <svg class="crumina-icon">
                                        <use xlink:href="#check-icon"></use>
                                    </svg>
                                </span>
                            </span>{{$projeto->first()->autor->name}}
                        </div>
                    </div>
                </div>
                <div class="product-image">
                    <img src="{{url($projeto->imagem)}}" alt="Product Image">
                </div>
                <div class="product-info">
                    <div class="tabs-block swiper-container">
                        <div class="swiper-nav">
                            <div class="swiper-button-next">
                                <svg class="crumina-icon next-button">
                                    <use xlink:href="#arrow-right2-icon"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg class="crumina-icon prev-button">
                                    <use xlink:href="#arrow-left2-icon"></use>
                                </svg>
                            </div>
                        </div>
                        <ul class="tabs-list swiper-wrapper">
                            <li class="swiper-slide active"><a href="#tab1">Descrição</a></li>
                            <li class="swiper-slide"><a href="#tab2">Metas Extras <span class="count">2</span></a></li>
                            <li class="swiper-slide"><a href="#tab3">Novidades <span class="count">2</span></a></li>
                            <li class="swiper-slide"><a href="#tab4">Reconpensas <span class="count">1</span></a></li>
                            <li class="swiper-slide"><a href="#tab5">Apoiadores <span class="count">1</span></a></li>
                        </ul>
                        <div class="tabs-content-wrapper">
                            <div id="tab1" class="tab active">
                                <div class="tab-content">
                                    <div class="product-description">
                                        <div class="title h6">Revive your Twitter with Awesome Graphics!</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                            in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        <ul class="list-line-height">
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>1500x500 pixels</li>
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>All free fonts used</li>
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>PS vectors for easier customization</li>
                                        </ul>
                                        <p>Remember to follow our <a href="#">profile</a> to know when new items are
                                            released!</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab">
                                <div class="tab-content">
                                    <ul class="comments-list">
                                        <li class="comment-item has-children">
                                            <div class="comment-item-wrapper">
                                                <div class="avatar-block">
                                                    <div class="avatar box-42">
                                                        <a href="06-profile-page.html">
                                                            <img src="img/avatar.png" alt="avatar"><span
                                                                class="verified"><svg class="crumina-icon">
                                                                    <use xlink:href="#check-icon"></use>
                                                                </svg></span></a>
                                                    </div>
                                                    <div class="avatar-meta">
                                                        <div class="avatar-title"><a href="06-profile-page.html">Dexter
                                                                Stark</a></div>
                                                        <div class="avatar-meta">@dexterstark</div>
                                                    </div>
                                                </div>
                                                <div class="comment-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam,
                                                    quis nostrud exercitation ullamco...
                                                </div>
                                                <div class="comment-meta">
                                                    <div class="publish-date">2 hours ago</div>
                                                    <div class="reply"><a href="#">Reply</a></div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li class="comment-item">
                                                    <div class="comment-item-wrapper">
                                                        <div class="avatar-block">
                                                            <div class="avatar box-42">
                                                                <a href="06-profile-page.html">
                                                                    <img src="img/avatar-2.png" alt="avatar"><span
                                                                        class="verified"><svg class="crumina-icon">
                                                                            <use xlink:href="#check-icon"></use>
                                                                        </svg></span></a>
                                                            </div>
                                                            <div class="avatar-meta">
                                                                <div class="avatar-title"><a
                                                                        href="06-profile-page.html">Jackie
                                                                        Jones</a></div>
                                                                <div class="avatar-meta">@JackieJ</div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-body">
                                                            Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem
                                                            accusantium doloremque.
                                                        </div>
                                                        <div class="comment-meta">
                                                            <div class="publish-date">46 minutes ago</div>
                                                            <div class="reply"><a href="#">Reply</a></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="tab3" class="tab">
                                <div class="tab-content">
                                    <ul class="reviews-list">
                                        <li class="review-item">
                                            <div class="review-header">
                                                <div class="review-title">This is an incredible template!!!!!!!</div>
                                                <div class="item-rating">
                                                    <span class="filled"><svg class="crumina-icon">
                                                            <use xlink:href="#star2-icon"></use>
                                                        </svg></span>
                                                    <span class="filled"><svg class="crumina-icon">
                                                            <use xlink:href="#star2-icon"></use>
                                                        </svg></span>
                                                    <span class="filled"><svg class="crumina-icon">
                                                            <use xlink:href="#star2-icon"></use>
                                                        </svg></span>
                                                    <span class="filled"><svg class="crumina-icon">
                                                            <use xlink:href="#star2-icon"></use>
                                                        </svg></span>
                                                    <span class=""><svg class="crumina-icon">
                                                            <use xlink:href="#star2-icon"></use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                            <div class="review-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut
                                                enim ad minim veniam, quis nostrud exercitation ullamco...</div>
                                            <div class="review-footer">
                                                <div class="review-author"><span class="avatar box-26"><a
                                                            href="06-profile-page.html"><img src="img/avatar-2.png"
                                                                alt=""></a><span class="verified"><svg
                                                                class="crumina-icon">
                                                                <use xlink:href="#check-icon"></use>
                                                            </svg></span></span>@JackieJ</div>
                                                <div class="publish-date">2 hours ago</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="product-additional-info">
                    {{-- total de apoiadores --}}
                    <div class="product-fav-counter"><svg class="crumina-icon">
                            <use xlink:href="#heart-icon"></use>
                        </svg><span class="count">105</span>
                    </div>
                    <div class="product-purchase-info">
                        <form class="cryptoki-form" id="purchase-form">
                            <div class="product-price">
                                <div class="price">$ {{$projeto->valor}} </div>
                                <div class="label">Valor da Meta</div>
                            </div>
                            <a  href="{{route('projeto.apoiar')}}" class="btn btn-fullwidth  gradient-background" type="submit">Apoiar este projeto!</a>
                        </form>
                    </div>
                    
                    <div class="product-details">
                        <div class="small-title">Detalhes do Projeto</div>
                        <div class="product-details-wrapper">
                            <ul class="details-title">
                                <li>Publicação</li>
                                <li>Tipo</li>
                               
                            </ul>
                            <ul class="details-value">
                                <li>{{date('d/m/Y', strtotime($projeto->created_at))}}</li>
                                <li>Colocar o tipo do projeto</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- main content area -->
@include('site.layouts.footer')