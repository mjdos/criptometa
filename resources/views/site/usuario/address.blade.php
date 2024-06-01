@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                <span class="gradient-text">Endereço</span>
            </h2>
            <div class="user-db-title">Endereço de Entrega</div>
            <div class="user-db-content-area">
                @if (session('status'))
                <div class="stat-number green">
                    {{ session('status') }}
                </div>
                @endif
                <!-- Sessão para Exibir Mensagens de Erro -->
                @if ($errors->any())
                <div class="stat-number red">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="cryptoki-form" id="personal-info-form" method="POST" action="{{ route('endereco.update',$usuario->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $usuario->id }}">

                        <div class="form-field">

                            <label for="estado">Estado <span class="required">*</span></label>
                            <select id="estado_id" name="estado_id">
                                <option value="">Selecione o estado</option>
                                @foreach($estados as $estado)
                                <option value="{{ $estado->id }}" {{ $usuario->address && $usuario->address->estado_id == $estado->id ? 'selected' : '' }}>{{ $estado->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-field">
                            <label for="cidade">Cidade <span class="required">*</span></label>
                            <select id="cidade_id" name="cidade_id">
                                <option value="">Selecione a cidade</option>
                                @foreach($cidades as $cidade)
                                <option value="{{ $cidade->id }}" {{ $usuario->address && $usuario->address->cidade_id == $cidade->id ? 'selected' : '' }}>{{ $cidade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="{{ $usuario->id }}">
                        <div class="form-field">
                            <label for="logradouro">Logradouro <span class="required">*</span></label>
                            <input type="text" id="logradouro" name="logradouro" value="{{ old('logradouro', $usuario->address->logradouro ?? '') }}" placeholder="Logradouro">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="numero">Número <span class="required">*</span></label>
                            <input type="text" id="numero" name="numero" value="{{ old('numero', $usuario->address->numero ?? '') }}" placeholder="Número">
                        </div>
                        <div class="form-field">
                            <label for="complemento">Complemento</label>
                            <input type="text" id="complemento" name="complemento" value="{{ old('complemento', $usuario->address->complemento ?? '') }}" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="bairro">Bairro <span class="required">*</span></label>
                            <input type="text" id="bairro" name="bairro" value="{{ old('bairro', $usuario->address->bairro ?? '') }}" placeholder="Bairro">
                        </div>
                        <div class="form-field">
                            <label for="cep">CEP <span class="required">*</span></label>
                            <input type="text" id="cep" name="cep" value="{{ old('cep', $usuario->address->cep ?? '') }}" placeholder="CEP" oninput="aplicarMascaraCEP(this)" maxlength="9">
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-wide btn-dark">Atualizar Perfil</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>
</div>
<script>
    // Função para aplicar máscara de CEP
    function aplicarMascaraCEP(input) {
        // Remove qualquer caractere que não seja número
        var cep = input.value.replace(/\D/g, '');

        // Verifica se o CEP possui 8 dígitos e aplica a máscara
        if (cep.length === 8) {
            input.value = cep.substring(0, 5) + '-' + cep.substring(5);
        }
    }

    // Aplica a máscara de CEP quando o campo é alterado
    document.addEventListener('DOMContentLoaded', function() {
        var cepInput = document.getElementById('cep');
        cepInput.addEventListener('input', function() {
            aplicarMascaraCEP(this);
        });
    });

</script>


<!-- main content area -->
@include('site.layouts.footer')
