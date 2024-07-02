@include('site.layouts.header')
<!-- main content area -->

<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                Meus <span class="gradient-text">Projetos</span>
            </h2>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col" class="heading-label">Projeto Detalhes</th>
                    <th scope="col" class="heading-label">Data</th>
                    <th scope="col" class="heading-label">Meta</th>
                    <th scope="col" class="heading-label">Valor Arrecadado</th>
                    <th scope="col" class="heading-label">Alguma Coisa</th>
                    <th scope="col" class="heading-label"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($projetos as $projeto)
                <tr>
                    <td data-label="Item details">
                        <div class="product-info">
                            <div class="product-thumb"><a href="05-product.html">
                                    <img src="@if($projeto->imagem != null) {{ asset('storage/imagens/' . $projeto->imagem) }}  @else img/content/previews/project-thumb-37.png @endif" alt=""></a>
                            </div>
                            <div class="product-details">
                                <div class="product-name"><a href="05-product.html">{{$projeto->titulo}}</a></div>
                                <div class="product-meta">
                                    <div class="item-category ui-templates">UI TEMPLATES</div>
                                    <div class="product-seller">
                                        {{$projeto->user->name}}<span class="verified"><svg class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Date"> {{ $projeto->created_at->format('d/m/Y') }}</td>
                    <td data-label="License">Regular</td>
                    <td data-label="Price" class="price">${{ $projeto->meta }}</td>

                    <td data-label="Rating">
                        <button data-modal="review-modal1" class="item-rating">
                            @for($i = 0; $i < $projeto->id; $i++)
                                <span class="filled"><svg class="crumina-icon">
                                        <use xlink:href="#star2-icon"></use>
                                    </svg></span>
                                @endfor


                        </button>
                        <td>
                            <a href="{{route('projeto.editar',$projeto->id)}}">acessar</a>
                        </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
