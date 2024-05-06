@include('site.layouts.header')

        <!-- main content area -->
        <div class="primary-content-area container content-padding shopping-cart-page">
            <div class="page-title-section">
                <h2>Apoiar <span class="gradient-text">Projeto</span></h2>
            </div>
            <!--  checkout form -->
            <div class="checkout-area">
                <form action="{{ route('projeto.investir', $projeto->id)}}" class="cryptoki-form grid-2-columns" id="checkout-form">
                    <div class="form-column">
                        <div class="summary-section">
                            <div class="small-title">Projeto</div>
                            <div class="products-in-cart">
                                <div class="product-in-cart">
                                    <div class="product-info">
                                        <div class="product-thumb">
                                            <img src="{{ url($projeto->imagem)}}" alt="">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">
                                                {{$projeto->nome}}
                                            </div>
                                            <div class="license-type">{{$projeto->descricao}}</div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="product-price">Carteira do Projeto: {{$projeto->carteira}}</div>
                            </div>
                            <div class="payment-method-section">
                                <div class="total-price-details">
                                    <div class="form-field">
                                        <label for="address">Valor do Apoio</label>
                                        <input type="number" name="valor">
                                    </div>
                                </div>
                            </div>
                            <div class="payment-method-section">
                                <div class="small-title">Métodos de Pagamentos</div>
                                <div class="payment-method">
                                    <input type="radio" name="payment-method" id="paypal">
                                    <label for="paypal">Pix</label>
                                    <div class="payment-description"></div>
                                </div>
                                <div class="payment-method">
                                    <input type="radio" name="payment-method" id="credit-card">
                                    <label for="credit-card">Cartão de Débito ou Crédito</label>
                                </div>
                            </div>
                            <div class="complete-order-button">
                                <input class="btn gradient-background" type="submit" value="Finalizar Apoio!">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- main content area -->
@include('site.layouts.footer')