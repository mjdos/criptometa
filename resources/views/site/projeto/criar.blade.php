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
        <form action="{{ route('projeto.store')}}" method="post" enctype="multipart/form-data"  class="cryptoki-form" id="upload-item-form">
            @csrf
            <div class="upload-row">
                <div class="upload-column">
                    <h5>Detalhes do projeto</h5>

                    <div class="form-field">
                        <label for="item-name">Nome</label>
                        <input type="text" name="nome">
                    </div>
                    <!-- <div class="form-field">
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
                    </div> -->

                    <div class="form-field">                        
                        <div class="upload-container">
                            <div class="artwork-upload">
                                <div class="label">Imagem</div>
                                <div class="upload-box"><svg class="crumina-icon">
                                        <use xlink:href="#upload-icon"></use>
                                    </svg>
                                    <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                    <input type="file" name="imagem" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light"></input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-field">
                        <label>1ª Meta</label>
                        <input type="text" name="meta_1">
                    </div>

                    <div class="form-field">
                        <label>2ª Meta</label>
                        <input type="text" name="meta_2">
                    </div>

                    <div class="form-field">
                        <label>3ª Meta</label>
                        <input type="text" name="meta_3">
                    </div>

                    <div class="form-field">
                        <label>4ª Meta</label>
                        <input type="text" name="meta_4">
                    </div>

                    <div class="form-field">
                        <label>5ª Meta</label>
                        <input type="text" name="meta_5">
                    </div>

                    <div class="form-field">
                        <label>Descrição</label>
                        <textarea name="descricao" cols="30" rows="10"></textarea>
                    </div>
                <input class="btn btn-wide gradient-background" type="submit" value="Salvar">
            </div>
    </div>
    </form>
</div>
</div>


<!-- main content area -->
@include('site.layouts.footer')
