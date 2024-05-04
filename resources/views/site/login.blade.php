@include('site.layouts.header')

        <!-- main content area -->
        <div class="primary-content-area section-medium content-padding">
            <div class="extra-small-section">
                <div class="page-title text-center">
                    <h2>Acessar <span class="gradient-text">Conta</span> </h2>
                </div>
                <form id="sign-in" class="tk-lp-form user-register-kit-sign tk-lp-tabs-form-content active"
                    data-handler="lrk_sign_in_action"><input class="lrk-sign-captcha-token simple-input" type="hidden"
                        name="token"
                        value="03AGdBq27AAQVuBtGUv1Ur7tTrD27P2-RiW4gjxYtbRujJeny-2A8m-_R-CRMi3Mh_0KYlw9tXtY0c0YQA26Uy-Y0FN4vwKVVXcp7AyC-D_H-z2OwkzcQCoZ0MrBjnP8q0RWRCdtHYHlBpkmUB7k-0bocxpvVJFbBoeHtebebXD2AkkuQsz0HqXXgHtXpxevzuUmtsroAgjnzFuk97-VFXsCiUuIlA08gyNGPMi9prm96oq5z2sVXXKHzWvt68DyVAvvOSm5gb8jkpSDo8QNODZX69enqLu1ngRaaIDaSSwAKzn98ZLxr8nBEia-rYZHnMuT-1FJKF3ZEgsYal801f0A-76vot9aNIsLD48M5-LQugrADeLwI0aZboeFy5TJ6lVjmNhrxrIoqZ_I0t-juUrR0nrY_6C-PP7EFeuOJ0YewHOnfvHADGpA4"><input
                        type="hidden" name="redirect_to" value="https://crumina.net/my-account/"  method="post" action="{{route('usuario.index')}}">
                    <div class="tk-lp-alert-cont"></div>
                    <div class="tk-lp-form-item"><label for="sign_in_username" class="tk-lp-label"> Usuário</label><input class="tk-lp-input" id="sign_in_username" name="log" type="text">
                    </div>
                    <div class="tk-lp-form-item"><label for="sign_in_password"
                            class="tk-lp-label">Senha</label><input class="tk-lp-input" id="sign_in_password"
                            name="pwd" type="password"></div>
                    <div class="tk-lp-form-item">
                        <div class="tk-lp-remember"><label class="tk-lp-checkbox"><input type="checkbox"
                                    name="rememberme" value="forever"><span
                                    class="tk-lp-control-indicator"></span>Lembre-me</label><a href="#"
                                class="tk-lp-link-lost tk-lp-tabs-form-item" data-id="lost-password">Esqueceu a senha?</a></div>
                    </div>
                    <button type="button" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Acessar</button>
                    <a href="{{route('site.cadastro')}}" type="button" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item" data-id="sign-up">Criar Conta</a>
                </form>
    
            </div>
        </div>
        <!-- main content area -->

@include('site.layouts.footer')