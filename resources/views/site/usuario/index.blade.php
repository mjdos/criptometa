@include('site.layouts.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                <span class="gradient-text">Perfil</span>
            </h2>
        </div>
        <div class="user-db-content-area">
            <form class="cryptoki-form" id="personal-info-form">
                <div class="form-group">
                    <div class="form-field">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" value="{{$usuario['nome'] ?? ''}}">
                    </div>
                    <div class="form-field">
                        <label for="email">E-mail </label>
                        <input type="email" id="email" disabled value="{{$usuario['email'] ?? ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="phone">Telefone para contato</label>
                        <input type="number" id="phone" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="password-1">Trocar Senha</label>
                        <input type="password" name="password" id="password-1">
                    </div>
                    <div class="form-field">
                        <label for="password-2">Repetir Senha</label>
                        <input type="password" name="password" id="password-2">
                    </div>
                </div>
                <button class="btn btn-wide btn-dark">Salvar</button>
            </form>
        </div>
        
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
