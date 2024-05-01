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
                        <label for="item-category">Tipo de projeto</label>
                        <select id="tipo_projeto">
                            <option value="">Seleciona</option>
                            <option value="pontual">Pontual </option>
                            <option value="continua">Contínua</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="item-name">Nome do Projeto</label>
                        <input type="text" id="projeto_nome">
                    </div>
                    <div class="form-field">
                        <label for="item-description">Descrição do Projeto</label>
                        <textarea id="projeto_descricao" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="item-price">Meta do Projeto</label>
                            <input type="number" id="projeto_meta">
                        </div>
                        <div class="form-field">
                            <label for="item-category">Categoria do Projeto</label>
                            <select id="projeto_categoria" name="projeto_categoria">
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
                    </div>

                    <input class="btn btn-wide gradient-background" type="submit" value="Upload Item">
                </div>
                <div class="upload-column">
                    <h5>Upload</h5>
                    <div class="upload-container">
                        <div class="artwork-upload">
                            <div class="label">Imagem do Projeto</div>
                            <div class="upload-box"><svg class="crumina-icon">
                                    <use xlink:href="#upload-icon"></use>
                                </svg>
                                <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                <input type="file" name="projeto_imagem" id="" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- main content area -->
@include('site.layouts.footer')
