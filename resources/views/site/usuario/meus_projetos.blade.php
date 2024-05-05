@include('site.layouts.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    
    @include('site.usuario.menu')

    <div class="main-content-area sales-statement">
        <div class="page-title-section">
            <h2><span class="gradient-text">Meus</span> Projetos</h2>
        </div>
        <!-- <div class="dashboard-wrapper">
            <div class="user-stats-section">
                <div class="stat-item">
                    <div class="stat-number"><font size=4>{{$usuario['carteira'] ?? ''}}</font></div>
                    <div class="stat-description">Endereço da Carteira</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number green"><font size=4>102 CCM</font></div>
                    <div class="stat-description">Qtde de Cripto</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><font size=4>R$ 1,00</font></div>
                    <div class="stat-description">Cotação do CCM</div>
                </div>
            </div>
            <a class="btn btn-wide btn-dark" href="{{route('site.login')}}">Retirada em R$</a>
            <a class="btn btn-wide btn-dark" href="{{route('site.login')}}">Comprar CCM</a> -->
            
            <div class="statement-list">

                <div class="statement">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label">Nome</th>
                                <th scope="col" class="heading-label">Detalhes do projeto</th>
                                <!-- <th scope="col" class="heading-label">Type</th> -->
                                <th scope="col" class="heading-label">Carteira</th>
                                <!-- <th scope="col" class="heading-label">Fee</th>
                                <th scope="col" class="heading-label">Tax</th>
                                <th scope="col" class="heading-label">Earnings</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td >
                                    <div>{{$projetos->nome}}</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Cryptoki NFT
                                            and Digital Market PSD Template</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$12.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$1.00</td>
                                <td data-label="tax" class="stat-value">-$1.00</td>
                                <td data-label="earnings" class="green stat-value">$10.00</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 16, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Cryptoki NFT
                                            and Digital Market PSD Template</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$12.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$1.00</td>
                                <td data-label="tax" class="stat-value">-$1.00</td>
                                <td data-label="earnings" class="green stat-value">$10.00</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 16, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Add Video
                                            Reviews to your Theme!</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <td data-label="type" class="stat-value">Purchase</td>
                                <!-- <td data-label="price" class="stat-value">$17.00</td> -->
                                <!-- <td data-label="fee" class="stat-value">$0.00</td>
                                <td data-label="tax" class="stat-value">$0.00</td>
                                <td data-label="earnings" class="red stat-value">$17.00</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 14, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Twitter
                                            Gaming Headers Pack 04</a>

                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$8.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$0.80</td>
                                <td data-label="tax" class="stat-value">-$0.80</td>
                                <td data-label="earnings" class="green stat-value">$6.60</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 14, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Twitter
                                            Gaming Headers Pack 12</a>

                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$8.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$0.80</td>
                                <td data-label="tax" class="stat-value">-$0.80</td>
                                <td data-label="earnings" class="green stat-value">$6.60</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 13, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Cryptoki NFT
                                            and Digital Market PSD Template</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$12.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$1.00</td>
                                <td data-label="tax" class="stat-value">-$1.00</td>
                                <td data-label="earnings" class="green stat-value">$10.00</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 9, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Twitter
                                            Gaming Headers Pack 08</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$8.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$0.80</td>
                                <td data-label="tax" class="stat-value">-$0.80</td>
                                <td data-label="earnings" class="green stat-value">$6.60</td> -->
                            </tr>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">July 8, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Cryptoki NFT
                                            and Digital Market PSD Template</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <!-- <td data-label="type" class="stat-value">Sale</td> -->
                                <td data-label="price" class="stat-value">$12.00</td>
                                <!-- <td data-label="fee" class="stat-value">-$1.00</td>
                                <td data-label="tax" class="stat-value">-$1.00</td>
                                <td data-label="earnings" class="green stat-value">$10.00</td> -->
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <div class="pagination-section flex-right">
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

</div>
<!-- main content area -->
@include('site.layouts.footer')
