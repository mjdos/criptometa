@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">

    @include('site.usuario.menu')

    <class="main-content-area">
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
            <input class="btn btn-wide gradient-background" type="submit" value="Salvar Alterações">
        </form>
    </div>

    </div>
</div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
