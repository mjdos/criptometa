@include('site.layouts.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                Meus <span class="gradient-text">Projetos</span>
            </h2>
        </div>
        <div class="user-db-content-area">
            <!--   items grid -->
            <div class="featured-box manage-items">
                <div class="featured-box-wrapper grid-4-columns">
                    <div class="create-item">
                        <div class="create-item-wrapper">
                            <div class="create-item-content">
                                <div class="create-item-image">
                                    <svg class="crumina-icon">
                                        <use xlink:href="#upload-icon"></use>
                                    </svg>
                                </div>
                                <div class="create-item-info">
                                    <div class="small-title">Create a New Item!
                                    </div>
                                    <div class="description">Click here to start</div>
                                </div>
                            </div>
                            <div class="create-item-post-content">
                            </div>
                        </div>
                    </div>

                    
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <button class="btn btn-small-wide btn-dark">Edit</button>
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">22</span></div>
                                <div class="featured-item-image">
                                    <a href="05-product.html">
                                        <img src="img/content/items/featured-item-29.png" alt=""></a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category social-graphics">
                                        Social graphics
                                    </div>
                                    <div class="title">
                                        <a href="05-product.html">Youtube Gaming Thumbnails Pack 30</a>
                                    </div>
                                    <div class="item-meta"><span class="avatar box-26"><a
                                                href="/cryptoki-html/"><img src="img/avatar.png" alt=""></a><span
                                                class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>@DexterStark</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
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
                                    <span><svg class="crumina-icon">
                                            <use xlink:href="#star2-icon"></use>
                                        </svg></span>
                                </div>
                                <div class="item-price">$8.00</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
 
        </div>
        
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
