@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">

    @include('site.usuario.menu')

    <   class="main-content-area">
        <div class="page-title">
        <h2>Editar Projeto</h2>
        <form class="cryptoki-form" id="personal-info-form" method="POST" action="{{ route('projeto.update', $projeto->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field">
                <label for="item-name">Título do projeto</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $projeto->titulo) }}" required>
            </div>
            <div class="form-field">
                <label for="item-description">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" required>{{ old('descricao', $projeto->descricao) }}</textarea>
            </div>
            <div class="form-field">
                <label for="item-meta">Meta</label>
                <input type="number" name="meta" id="meta" class="form-control" value="{{ old('meta', $projeto->meta) }}" required>
            </div>
            <div class="form-field">
                <div class="upload-container">
                    <div class="artwork-upload">
                        <div class="label">Imagem</div>
                        <div class="upload-box"><svg class="crumina-icon">
                                <use xlink:href="#upload-icon"></use>
                            </svg>
                            <div class="upload-notice"> Max 120MB, PNG, JPEG</div>
                            <input type="file" name="imagem" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light">
                            @if ($projeto->imagem)
                                <div class="current-image">
                                    <img src="{{ asset('storage/imagens/' . $projeto->imagem) }}" alt="Imagem atual" width="150">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h6>Submetas do projeto</h6>
                <div id="submetas-container">
                    @foreach ($projeto->submetas as $index => $submeta)
                        <div class="form-group" data-index="{{ $index }}">
                            <div class="form-field">
                                <label for="software-used">Nome da SubMeta</label>
                                <input type="text" name="submetas[{{ $index }}][nome]" class="form-control" value="{{ old('submetas.'.$index.'.nome', $submeta->nome) }}" required>
                            </div>
                            <div class="form-field">
                                <label for="software-used">Percentual</label>
                                <input type="number" name="submetas[{{ $index }}][percentual]" class="form-control" value="{{ old('submetas.'.$index.'.percentual', $submeta->percentual) }}" required>
                            </div>
                            <div class="form-field">
                                <label for="software-used">Valor</label>
                                <input type="number" name="submetas[{{ $index }}][valor]" class="form-control" value="{{ old('submetas.'.$index.'.valor', $submeta->valor) }}" required>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-submeta" class="btn btn-wide btn-dark">Adicionar Submeta</button>
            </div>
            <br>
            <input class="btn btn-wide gradient-background" type="submit" value="Salvar Alterações">
        </form>
    </div>

    <script>
        document.getElementById('add-submeta').addEventListener('click', function () {
            var container = document.getElementById('submetas-container');
            var index = container.children.length;
            var newSubmeta = `
                <div class="form-group" data-index="${index}">
                    <div class="form-field">
                        <label for="software-used">Nome da SubMeta</label>
                        <input type="text" name="submetas[${index}][nome]" class="form-control" placeholder="Nome da Submeta" required>
                    </div>
                    <div class="form-field">
                        <label for="software-used">Percentual</label>
                        <input type="number" name="submetas[${index}][percentual]" class="form-control" placeholder="Percentual" required>
                    </div>
                    <div class="form-field">
                        <label for="software-used">Valor</label>
                        <input type="number" name="submetas[${index}][valor]" class="form-control" placeholder="Valor" required>
                    </div>
                </div>`;
            container.insertAdjacentHTML('beforeend', newSubmeta);
        });
    </script>

    </div>
</div>

</div>
<script>
        document.getElementById('add-submeta').addEventListener('click', function () {
            var container = document.getElementById('submetas-container');
            var index = container.children.length;
            var newSubmeta = `
                <div class="form-group" data-index="${index}">
                    <div class="form-field">
                        <label for="software-used">Nome da SubMeta</label>
                        <input type="text" name="submetas[${index}][nome]" class="form-control" placeholder="Nome da Submeta" required>
                    </div>
                    <div class="form-field">
                        <label for="software-used">Percentual</label>
                        <input type="number" name="submetas[${index}][percentual]" class="form-control" placeholder="Percentual" required>
                    </div>
                    <div class="form-field">
                        <label for="software-used">Valor</label>
                        <input type="number" name="submetas[${index}][valor]" class="form-control" placeholder="Valor" required>
                    </div>
                </div>`;
            container.insertAdjacentHTML('beforeend', newSubmeta);
        });
    </script>
<!-- main content area -->
@include('site.layouts.footer')
