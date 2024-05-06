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
                            </span>{{$projeto->first()->autor->name}}
                        </div>
                    </div>
                </div>
                <div class="product-image">
                    <img src="{{url($projeto->imagem)}}" style="height: 700px;" alt="Product Image">
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
                            <li class="swiper-slide active">
                                <a href="#tab1">Descrição</a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#tab2">Metas<span class="count">5</span></a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#tab3">Recompensas<span class="count"></span></a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#tab5">Apoiadores<span class="count">{{ count($apoiadores)}}</span></a>
                            </li>
                        </ul>
                        <div class="tabs-content-wrapper">
                            <div id="tab1" class="tab active">
                                <div class="tab-content">
                                    <div class="product-description">
                                        <div class="title h6">{{$projeto->nome}}!</div>
                                        <p>{{$projeto->descricao}}</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab">
                                <div class="tab-content">
                                    <div class="product-description">
                                        <div class="title h6">Metas!</div>
                                        <ul class="list-line-height">
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>20% - {{$projeto->meta_1}}</li>
                                                <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>20% - {{$projeto->meta_2}}</li>
                                                <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>20% - {{$projeto->meta_3}}</li>
                                                <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>20% - {{$projeto->meta_4}}</li>
                                                <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>20% - {{$projeto->meta_5}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab">
                                <div class="tab-content">
                                    <div class="product-description">
                                        <div class="title h6">O valor da sua doação também te recompensa!</div>
                                        <ul class="list-line-height">
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$10 - Agradecimento pessoal em vídeo pelo apoio ao projeto.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$20 - Acesso antecipado à versão beta do produto ou software.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$20 - Acesso antecipado à versão beta do produto ou software.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$50 - Nome nos agradecimentos na página do projeto e acesso antecipado à versão beta.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$100 - Camiseta exclusiva do projeto com design inovador.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$200 - Convite para webinar exclusivo com o criador do projeto para discussão de ideias e feedback.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$500 - Pacote premium que inclui todos os itens anteriores mais um produto inicial quando lançado.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$1,000 - Nome como patrocinador no site do projeto e todos os benefícios anteriores.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$5,000 - Visita exclusiva ao laboratório ou espaço de trabalho do projeto com a oportunidade de conhecer a equipe.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$10,000 - Participação em um jantar exclusivo com o criador do projeto e outros investidores de alto nível.
                                            </li>
                                            <li>
                                                <svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>R$100,000 - Tornar-se sócio do projeto, com direito a 10% de participação na empresa (limitado a 4 investidores).
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="product-additional-info">
                    
                    <div class="product-purchase-info">
                        <form class="cryptoki-form" id="purchase-form">
                            <div class="product-price" style="margin-bottom: 0px;">
                                <div class="price">R${{ number_format($projeto->valor,2,",",".") }} </div>
                                <div class="label">Valor da Meta</div>
                            </div>
                            <div class="product-price">
                                <div class="price">R${{number_format($valorTotal, 2,",",".")}} </div>
                                <div class="label">Valor Arrecadado</div>
                            </div>
                            <a  href="{{route('projeto.apoiar', $projeto->id)}}" class="btn btn-fullwidth  gradient-background" type="submit">Apoiar este projeto!</a>
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