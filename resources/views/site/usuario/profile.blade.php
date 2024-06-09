@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                <span class="gradient-text">Perfil</span>
            </h2>
            <div class="user-db-content-area">
                @if (session('status'))
                <div class="stat-number green">
                    
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    position: 'top',
                    title: 'Sucesso!',
                    text: '{{ session('status') }}',
                    icon: 'success',
                    showConfirmButton: true
                });
                    });
                </script>
                @endif
        
                <form class="cryptoki-form" id="personal-info-form" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="user-db-title">Informações Pessoais</div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="{{ $usuario->id }}">
                        <div class="form-field">
                            <div class="form-field">
                                <label for="name">Nome Completo</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}">
                            </div>
                        </div>
                        <div class="form-field">
                            <label for="email">E-Mail</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="username">CPF</label>
                            <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $usuario->cpf) }}" placeholder="XXX.XXX.XXX-XX" oninput="aplicarMascaraCPF(this)">
                        </div>
                        <div class="form-field">
                            <label for="phone">Celular</label>
                            <input type="text" id="phone" name="phone" class="phone form-control" value="{{ old('phone', $usuario->telefone) }}" placeholder="(XX) XXXXX-XXXX" oninput="aplicarMascaraCelular(this)">
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
                        </div>
                </form>
            </div>
        </div>

    </div>

</div>


</div>
<script>
    function aplicarMascaraCPF(input) {
        // Remove tudo o que não é dígito
        let valor = input.value.replace(/\D/g, '');

        // Limita o valor a 11 dígitos
        if (valor.length > 11) {
            valor = valor.substring(0, 11);
        }

        // Adiciona os pontos e o traço de acordo com a posição dos dígitos
        valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
        valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
        valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

        input.value = valor;
    }

    function aplicarMascaraCelular(input) {
        // Remove tudo o que não é dígito
        let valor = input.value.replace(/\D/g, '');

        // Limita o valor a 11 dígitos
        if (valor.length > 11) {
            valor = valor.substring(0, 11);
        }

        // Adiciona os parênteses, espaço e o traço de acordo com a posição dos dígitos
        valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
        valor = valor.replace(/(\d{5})(\d)/, '$1-$2');

        input.value = valor;
    }

    // Função para aplicar máscaras aos campos na carga inicial da página
    function aplicarMascarasIniciais() {
        const cpfInput = document.getElementById('cpf');
        const celularInput = document.getElementById('celular');

        if (cpfInput) {
            aplicarMascaraCPF(cpfInput);
        }

        if (celularInput) {
            aplicarMascaraCelular(celularInput);
        }
    }

    // Chamar a função para aplicar as máscaras ao carregar a página
    document.addEventListener('DOMContentLoaded', aplicarMascarasIniciais);

</script>
<!-- main content area -->
@include('site.layouts.footer')
