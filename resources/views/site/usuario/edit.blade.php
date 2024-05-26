@include('site.layouts.header')

<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <!-- main content area -->
    <div class="main-content-area">
        <div class="page-title">
            <h2>
               Editar  <span class="gradient-text">Perfil</span> 
            </h2>
        </div>
        <div class="user-db-content-area">
            <form class="cryptoki-form" id="personal-info-form" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="user-db-title">Alterar Informações</div>
                <input type="hidden" name="id" id="id" value="{{ $usuario->id }}">
                <div class="form-group">
                    <div class="form-field">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="email">E-Mail</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}">
                    </div>
                    <div class="form-field">
                        <label for="phone">Celular</label>
                        <input type="text" id="phone" name="phone" class="phone form-control" placeholder="Telefone"value="{{ old('email', $usuario->telefone) }}">
                    </div>
                </div>
                <div class="form-field">                        
                    <div class="upload-container">
                        <div class="artwork-upload">
                            <div class="label">Foto do Perfil</div>
                            <div class="upload-box"><svg class="crumina-icon">
                                    <use xlink:href="#upload-icon"></use>
                                </svg>
                                <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                <input type="file" name="photo" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light"></input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="password-1">Nova Senha</label>
                        <input type="password" name="password" id="password-1">
                    </div>
                    <div class="form-field">
                        <label for="password-2">Repitir Senha</label>
                        <input type="password" name="password_confirmation" id="password-2">
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-wide btn-dark">
                            Atualizar Perfil
                        </button>
                       <a href="{{ route('usuario.index') }}"> <button   type="button" value="" class="btn btn-wide btn-dark">
                            Voltar
                        </button></a>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
<!-- main content area -->

</div>
<!-- main content area -->
@include('site.layouts.footer')
