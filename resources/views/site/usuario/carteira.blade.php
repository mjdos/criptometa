@include('site.layouts.header')

<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                <span class="gradient-text">Profile</span> Info
            </h2>
        </div>
        <div class="user-db-content-area">
            <form class="cryptoki-form" id="personal-info-form">
                <div class="user-db-title">Personal Info</div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" value="Dexter Stark">
                    </div>
                    <div class="form-field">
                        <label for="email">Email </label>
                        <input type="email" id="email" value="dexstark@fakemail.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="username">Usuário</label>
                        <input type="text" id="username" value="dexterstark">
                    </div>
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
            </form>
            <div class="upload-photo-box">
                <div class="user-db-title">Capa</div>
                <div class="user-avatar"><img src="img/content/profile/avatar-upload.png" alt=""></div>
                <div class="user-cover-image"><img src="img/content/profile/profile-cover-1.png" alt=""></div>
                <div class="upload-notice">As imagens devem estar no formato .png ou .jpg. Tamanho mínimo 100x100px (avatar) e
                    1920x320px (capa) </div>
            </div>
        </div>

        <button class="btn btn-wide btn-dark">Salvar Aterações</button>
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
