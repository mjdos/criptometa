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
            <form action="{{route('cadastro.update')}}" method="post" class="cryptoki-form" id="personal-info-form">
                @csrf
                <div class="form-group">
                    <div class="form-field">
                        <label>Nome Completo</label>
                        <input type="text" name="usuario" value="{{$usuario['nome'] ?? ''}}">
                    </div>
                    <div class="form-field">
                        <label>E-mail </label>
                        <input type="email" name="email" disabled value="{{$usuario['email'] ?? ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label>Telefone para contato</label>
                        <input type="number" name="telefone" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label>Trocar Senha</label>
                        <input type="password" name="senha" id="password-1">
                    </div>
                    <div class="form-field">
                        <label>Repetir Senha</label>
                        <input type="password" name="repita_senha" id="password-2">
                    </div>
                </div>
                <button class="btn btn-wide btn-dark">Salvar</button>
            </form>
        </div>

    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
