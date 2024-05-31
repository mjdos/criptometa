@include('site.layouts.header')

<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <!-- main content area -->
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                Adicionar <span class="gradient-text">Endereço</span>
            </h2>
        </div>
        <div class="statement-list">

            <a href="{{route('usuario_endereco.create',$usuario->id)}}" class="btn btn-normal btn-dark">Adicionar Endereço</a>

            <div class="statement">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th scope="col" class="heading-label">Estado</th>
                            <th scope="col" class="heading-label">Cidade</th>
                            <th scope="col" class="heading-label">Endereço</th>
                            <th scope="col" class="heading-label">Bairro</th>
                            <th scope="col" class="heading-label">Casa</th>
                            <th scope="col" class="heading-label">Complemento</th>
                            <th scope="col" class="heading-label">CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enderecos as $enderecos)
                        <tr>
                            <td data-label="Date">
                                <div class="date">Jul 17, 2021</div>
                            </td>
                            <td data-label="Item details">
                                <div class="item-title gradient-text"><a href="05-product.html">Cryptoki NFT
                                        and Digital Market PSD Template</a>
                                </div>
                                <div class="license-details">Regular License - Invoice CRKT12354</div>
                            </td>
                            <td data-label="type" class="stat-value">Sale</td>
                            <td data-label="price" class="stat-value">$12.00</td>
                            <td data-label="fee" class="stat-value">-$1.00</td>
                            <td data-label="tax" class="stat-value">-$1.00</td>
                            <td data-label="earnings" class="green stat-value">$10.00</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- main content area -->

    </div>
</div>
<!-- main content area -->
@include('site.layouts.footer')
