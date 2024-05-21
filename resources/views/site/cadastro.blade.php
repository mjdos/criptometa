@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area section-medium content-padding">
    <div class="extra-small-section">
        <div class="page-title text-center">
            <h2><span class="gradient-text">Registrar</span> Conta</h2>
        </div>
        @if (session('error'))
        <div class="stat-number red">
            {{ session('error') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li><div class="stat-number red">{{ $error }}</div></li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('cadastro.store')}}" method="post" class="tk-lp-form user-register-kit-register tk-lp-tabs-form-content active">
            @csrf
            <div class="tk-lp-form-item">
                <label class="tk-lp-label">Nome Completo</label>
                <input class="tk-lp-input" name="usuario" type="text"></div>
            <div class="tk-lp-form-item">
                <label for="sign_up_email-address" class="tk-lp-label">Email</label>
                <input class="tk-lp-input" name="email" type="email">
            </div>
            <div class="tk-lp-form-item">
                <label class="tk-lp-label">Senha</label>
                <input class="tk-lp-input" name="senha" type="password">
            </div>
            <div class="tk-lp-form-item">
                <label class="tk-lp-label">Confirme a Senha</label>
                <input class="tk-lp-input" name="confirme_senha" type="password">
            </div>
           <br>
            <button type="submit" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Registrar </button>
            <a type="button" href="{{route('site.login')}}" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item" data-id="sign-in">Eu já tenho conta!</a>
    </div>
    </form>
    <br>
    <!-- <div class="register-notice">

            Você receberá um e-mail de confirmação em sua caixa de entrada com um link para ativar sua conta.
        </div> -->
</div>
</div>
<!-- main content area -->
@include('site.layouts.footer')
