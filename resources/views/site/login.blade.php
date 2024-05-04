@include('site.layouts.header')

        <!-- main content area -->
        <div class="primary-content-area section-medium content-padding">
            <div class="extra-small-section">
                <div class="page-title text-center">
                    <h2>Acessar <span class="gradient-text">Conta</span> </h2>
                </div>
                <form action="{{ route('site.logar')}}" method="post" class="tk-lp-form user-register-kit-sign tk-lp-tabs-form-content active" >
                    @csrf
                    <div class="tk-lp-form-item">
                        <label  class="tk-lp-label">Usuário</label>
                        <input class="tk-lp-input" name="usuario" type="text">
                    </div>
                    <div class="tk-lp-form-item">
                        <label class="tk-lp-label">Senha</label>
                        <input class="tk-lp-input" name="senha" type="password"></div>
                    <div class="tk-lp-form-item">
                        <div class="tk-lp-remember">
                            <a href="#" class="tk-lp-link-lost tk-lp-tabs-form-item">Esqueceu a senha?</a>
                        </div>
                    </div>
                    <button type="submit" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Acessar</button>
                    <a href="{{route('site.cadastro')}}" type="button" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item">Criar Conta</a>
                </form>
            </div>
        </div>
        <!-- main content area -->

@include('site.layouts.footer')