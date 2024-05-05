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
                                <th scope="col" class="heading-label"></th>
                                <!-- <th scope="col" class="heading-label">Tax</th>
                                <th scope="col" class="heading-label">Earnings</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($projetos as $projeto)
                            <tr>
                                <td>{{ $projeto->nome }}</td>
                                <td>{{ $projeto->descricao}}</td>
                                <td>{{ $projeto->carteira }}</td>
                                <td style="padding-right: 0px;">
                                    <a href="{{ route('projeto.index', $projeto->id) }}"  class="btn btn-fullwidth gradient-background">
                                    <i class="bi bi-backspace-fill"></i>
                                        Detalhes
                                    </a>
                                </td>
                                <!-- <td>
                                    <div>
                                    <button class="btn btn-fullwidth  gradient-background" type="submit">fdsa</button>
                                    </div>
                                </td> -->
                                <!-- <td data-label="tax" class="stat-value">-$1.00</td>
                                <td data-label="earnings" class="green stat-value">$10.00</td> -->
                            @endforeach
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
