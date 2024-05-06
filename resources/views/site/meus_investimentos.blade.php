@include('site.layouts.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    
    @include('site.usuario.menu')

    <div class="main-content-area sales-statement">
        <div class="page-title-section">
            <h2><span class="gradient-text">Meus</span> Investimentos</h2>
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
                                <th scope="col" class="heading-label">Valor investido</th>
                                <!-- <th scope="col" class="heading-label">Type</th> -->
                                <th scope="col" class="heading-label">Data do investimento</th>
                                <th scope="col" class="heading-label"></th>
                                <!-- <th scope="col" class="heading-label">Tax</th>
                                <th scope="col" class="heading-label">Earnings</th> -->
                            </tr>
                        </thead>
                        <tbody>
                                @if ($investimentos->isEmpty())
                                    <tr>
                                        <td >Você ainda não possui investimentos.</td>
                                    </tr>
                                @else
                                    @foreach ($investimentos as $investimento)
                                        <tr>
                                            <td>{{ $investimento->investidor->name }}</td>
                                            <td>{{ $investimento->valor }}</td>
                                            <td>{{ $investimento->created_at->format('d/m/Y H:i:s') }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
