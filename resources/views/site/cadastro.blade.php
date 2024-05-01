@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area section-medium content-padding">
    <div class="extra-small-section">
        <div class="page-title text-center">
            <h2><span class="gradient-text">Registrar</span> Conta</h2>
        </div>
        <form id="sign-up" class="tk-lp-form user-register-kit-register tk-lp-tabs-form-content active" data-handler="lrk_register_action"><input type="hidden" name="redirect_to" value=""><input type="hidden" name="after_login" value="auto_login">
            <div class="tk-lp-alert-cont"></div>
            <div class="tk-lp-form-item"><label for="sign_up_username" class="tk-lp-label">Usuário</label><input class="tk-lp-input" id="sign_up_username" name="user_login" type="text"></div>
            <div class="tk-lp-form-item"><label for="sign_up_email-address" class="tk-lp-label">Email </label><input class="tk-lp-input" id="sign_up_email-address" name="user_email" type="text"></div>
            <div></div>
            <div class="tk-lp-form-item"><label for="sign_up_password" class="tk-lp-label">Senha</label><input class="tk-lp-input" id="sign_up_password" name="user_password" type="password"></div>
            <div class="tk-lp-form-item"><label for="sign_up_confirm-password" class="tk-lp-label">Confirme a Senha</label><input class="tk-lp-input" id="sign_up_confirm-password" name="user_password_confirm" type="password"></div>
            <div class="tk-lp-form-item">
                <div class="tk-lp-check"><label class="tk-lp-checkbox"><input type="checkbox" name="gdpr" value="1"><span class="tk-lp-control-indicator"></span></label>
                    <div class="tk-lp-check-text">Eu concordo com a <a href="" target="_blank" rel="noopener noreferrer">Política de Privacidade </a></div>
                </div>
            </div><button type="button" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Registrar </button>
            <a type="button" href="{{route('site.login')}}" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item" data-id="sign-in">Eu já tenho conta!</a>
            </div>
        </form>
        <br>
        <div class="register-notice">

            Você receberá um e-mail de confirmação em sua caixa de entrada com um link para ativar sua conta.
        </div>
    </div>
</div>
<!-- main content area -->
@include('site.layouts.footer')
