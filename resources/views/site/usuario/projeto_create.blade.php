@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">

    @include('site.usuario.menu')

    <div class="main-content-area">
        <div class="page-title">
            <h2> Criar <span class="gradient-text">Projeto</span></h2>

            <div class="user-db-content-area">
                <h5>Detalhes do Projeto</h5>
                @if ($errors->any())
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            position: 'top'
                            , title: 'Erro!'
                            , html: `
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        `
                            , icon: 'error'
                            , showConfirmButton: true
                        });
                    });

                </script>
                @endif
                <form class="cryptoki-form" id="personal-info-form" method="POST" action="{{ route('projeto.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-field">
                        <label for="item-name">Título do projeto</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}">
                    </div>
                    <div class="form-field">
                        <label for="item-description">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control">{{ old('descricao') }}</textarea>
                    </div>
                    <div class="form-field">
                        <label for="item-meta">Meta</label>
                        <input type="number" name="meta" id="meta" class="form-control" value="{{ old('meta') }}">
                    </div>
                    <div class="form-field">
                        <div class="upload-container">
                            <div class="artwork-upload">
                                <div class="label">Imagem</div>
                                <div class="upload-box"><svg class="crumina-icon">
                                        <use xlink:href="#upload-icon"></use>
                                    </svg>
                                    <div class="upload-notice"> Max 120MB, PNG, JPEG</div>
                                    <input type="file" name="imagem" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-wide gradient-background" type="submit" value="Criar Projeto">
                </form>
            </div>
        </div>

    </div>
</div>

</div>

<!-- main content area -->
@include('site.layouts.footer')
