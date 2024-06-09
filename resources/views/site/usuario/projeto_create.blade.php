@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">

    @include('site.usuario.menu')

    <div class="main-content-area">
        <div class="page-title">
            <h2> Criar <span class="gradient-text">Projeto</span></h2>

            <div class="user-db-content-area">
                <h5>Detalhes do Projeto</h5>
                @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                    position: 'top',
                    title: 'Sucesso!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    showConfirmButton: true
                });
                    });
                </script>
                @endif
                <form class="cryptoki-form" id="personal-info-form" method="POST" action="{{ route('projeto.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-field">
                        <label for="item-name">Título do projeto</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" required>
                    </div>
                    <div class="form-field">
                        <label for="item-description">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" required>{{ old('descricao') }}</textarea>
                    </div>
                    <div class="form-field">
                        <label for="item-meta">Meta</label>
                        <input type="number" name="meta" id="meta" class="form-control" value="{{ old('meta') }}" required>
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
                    <div class="mb-3">
                        <h6>Submetas do projeto</h6>
                        <div id="submetas-container">
                            <div class="form-group">
                                <div class="form-field">
                                    <label for="software-used">Nome da SubMeta</label>
                                    <input type="text" name="submetas[0][nome]" class="form-control" placeholder="Nome da Submeta" required>
                                </div>
                                <div class="form-field">
                                    <label for="software-used">Percentual</label>
                                    <input type="number" name="submetas[0][percentual]" class="form-control" placeholder="Percentual" required>
                                </div>
                                <div class="form-field">
                                    <label for="software-used">Valor</label>
                                    <input type="number" name="submetas[0][valor]" class="form-control" placeholder="Valor" required>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="add-submeta" class="btn btn-wide btn-dark">Adicionar Submeta</button>
                    </div>
                    <br>
                    <input class="btn btn-wide gradient-background" type="submit" value="Criar Projeto">
                </form>
            </div>
        </div>

    </div>
</div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let submetaIndex = 1;
        document.getElementById('add-submeta').addEventListener('click', function() {
            const container = document.getElementById('submetas-container');
            const newSubmeta = document.createElement('div');
            newSubmeta.classList.add('submeta');
            newSubmeta.innerHTML = `
                <div class="form-group">
                    <div class="form-field">
                        <label for="software-used">Nome da SubMeta</label>
                        <input type="text" name="submetas[${submetaIndex}][nome]" class="form-control" placeholder="Nome da Submeta" required>
                    </div>
                    <div class="form-field">
                        <label for="software-used">Percentual</label>
                        <input type="number" name="submetas[${submetaIndex}][percentual]" class="form-control" placeholder="Percentual" required>
                    </div>
                    <div class="form-field">
                        <label for="software-used">Valor</label>
                        <input type="number" name="submetas[${submetaIndex}][valor]" class="form-control" placeholder="Valor" required>
                    </div>
                </div>
            `;
            container.appendChild(newSubmeta);
            submetaIndex++;
        });
    });

</script>
<!-- main content area -->
@include('site.layouts.footer')
