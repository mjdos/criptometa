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
                                    <div class="small-title">Crie um Projeto</div>
                                    <div class="description">  <a href="{{route('projeto.criar')}}" class="btn btn-small-wide btn-dark"> Clique aqui para começa!</a></div>
                                </div>
                            </div>
                            <div class="create-item-post-content">
                            </div>
                        </div>
                    </div>

                    @foreach($projetos as $projeto)
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="featured-item-image">
                                    <a href="{{ route('projeto.index', $projeto->id) }}">
                                        <img src="@if(isset($projeto->imagem))
                                        {{$projeto->imagem }}" alt=""></a>
                                        @else
                                        ?? img/content/items/featured-item-29.png
                                        @endif
                                </div>
                                <div class="featured-item-info">
                                    
                                    <div class="title">
                                        <a href="{{ route('projeto.index', $projeto->id) }}">{{$projeto->nome}}</a>
                                    </div>
                                    <div class="item-meta"><span class="avatar box-26"><a href="/cryptoki-html/"><img src="img/avatar.png" alt=""></a><span class="verified">
                                                </span></span>{{$projeto->autor->name}}</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
                                
                                <div class="item-price">${{$projeto->carteira}}</div>
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
