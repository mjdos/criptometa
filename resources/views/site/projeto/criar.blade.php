@include('site.layouts.header')
<!-- main content area -->
<br>
<br><br>
<div class="container">
    <div class="main-content-area">
        <div class="page-title-section">
            <h2> Criar <span class="gradient-text">Projeto</span></h2>
        </div>
        <!--  upload item form -->
        <form class="cryptoki-form" id="upload-item-form">
            <div class="upload-row">
                <div class="upload-column">
                    <h5>Detalhes do projeto</h5>

                    <div class="form-field">
                        <label for="item-name">Nome do Projeto</label>
                        <input type="text" id="projeto_nome" name="projeto_nome">
                    </div>

                    <div class="form-field">
                        <label for="item-category">Categoria do Projeto</label>
                        <select id="projeto_categoria" name="projeto_categoria">
                            <option value="" disabled selected>Selecione</option>
                            <option value="tecnologia">Tecnologia</option>
                            <option value="arte">Arte e Cultura</option>
                            <option value="design">Design e Moda</option>
                            <option value="música">Música</option>
                            <option value="filmes">Filmes e Vídeos</option>
                            <option value="livros">Livros e Publicações</option>
                            <option value="alimentacao">Alimentação e Culinária</option>
                            <option value="esportes">Esportes e Atividades ao Ar Livre</option>
                            <option value="educação">Educação</option>
                            <option value="saude">Saúde e Bem-estar</option>
                            <option value="meio-ambiente">Meio Ambiente</option>
                            <option value="comunidade">Projetos Comunitários</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="item-name">Imagem do Projeto</label>
                        {{-- <input type="file" name="projeto_imagem" id="projeto_imagem" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light"> --}}
                        <div class="upload-container">
                            <div class="artwork-upload">
                                <div class="label">Imagem</div>
                                <div class="upload-box"><svg class="crumina-icon">
                                        <use xlink:href="#upload-icon"></use>
                                    </svg>
                                    <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                    <button
                                        class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light">Escolher Imagem</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="item-description"></label>
                        <input type="number" id="projeto_meta_1" name="projeto_meta_1">
                    </div>

                    <div class="form-field">
                        <label for="item-description"> 2ª Meta</label>
                        <input type="number" id="projeto_meta_2" name="projeto_meta_2">
                    </div>

                    <div class="form-field">
                        <label for="item-description"> 3ª Meta</label>
                        <input type="number" id="projeto_meta_3" name="projeto_meta_3">
                    </div>

                    <div class="form-field">
                        <label for="item-description">4ª Meta</label>
                        <input type="number" id="projeto_meta_4" name="projeto_meta_4">
                    </div>

                    <div class="form-field">
                        <label for="item-description"> 5ª Meta</label>
                        <input type="number" id="projeto_meta_5" name="projeto_meta_5">
                    </div>

                    <div class="form-field">
                        <label for="item-description">Descrição do Projeto</label>
                        <textarea id="projeto_descricao" name="projeto_descricao" cols="30" rows="10"></textarea>

                    </div>
              

                <input class="btn btn-wide gradient-background" type="submit" value="Upload Item">
            </div>
    </div>
    </form>
</div>
</div>


<!-- main content area -->
@include('site.layouts.footer')
