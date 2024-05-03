@include('site.layouts.header')

        <!-- main content area -->
        <div class="primary-content-area container content-padding shopping-cart-page">
            <div class="page-title-section">
                <h2>Apoiar <span class="gradient-text">Projeto</span></h2>
            </div>
            <!--  checkout form -->
            <div class="checkout-area">
                <form class="cryptoki-form grid-2-columns" id="checkout-form">
                    <div class="form-column">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="name">Seu Nome</label>
                                <input type="text" id="name">
                            </div>
                            <div class="form-field">
                                <label for="email">Usuário</label>
                                <input type="email" id="email">
                            </div>
                        </div>
                        <div class="form-field">
                            <label for="address">E-mail</label>
                            <input type="text" id="address">
                        </div>
                    </div>
                    <div class="form-column">
                        <div class="summary-section">
                            <div class="small-title">Projeto</div>
                            <div class="products-in-cart">
                                <div class="product-in-cart">
                                    <div class="product-info">
                                        <div class="product-thumb"><a href="05-product.html"><img
                                                    src="img/content/previews/project-thumb-37.png" alt=""></a></div>
                                        <div class="product-details">
                                            <div class="product-name"><a href="05-product.html">O Nome do projeto vai aqui</a></div>
                                            <div class="license-type">categoria do projeto</div>
                                        </div>
                                    </div>
                                    <div class="product-price">$Meta do projeto</div>
                                </div>
                            </div>
                            <div class="payment-method-section">
                                <div class="total-price-details">
                                    <div class="form-field">
                                        <label for="address">Valor do Apoio</label>
                                        <input type="number" id="apoaio_valor">
                                    </div>
                                </div>
                            </div>
                            <div class="payment-method-section">
                                <div class="small-title">Payment Method</div>
                                <div class="payment-method">
                                    <input type="radio" name="payment-method" id="paypal">
                                    <label for="paypal">Paypal</label>
                                    <div class="payment-description">Pay with your Paypal balance or connected bank
                                        account/ credit card! It’s quick and really secure, it just takes a few minutes
                                        to set it up!</div>
                                </div>
                                <div class="payment-method">
                                    <input type="radio" name="payment-method" id="credit-card">
                                    <label for="credit-card">Credit or Debit Card</label>
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