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
            <div class="upload-column">
                <h5>Detalhes do projeto</h5>

                <div class="form-field">
                    <label for="item-name">Nome</label>
                    <input type="text" name="nome">
                </div>
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
                    <label>Valor para Arrecadar</label>
                    <input type="number" name="valor" value="1000">
                </div>
                <div class="form-field">
                    <label> Meta 1</label>
                    <input type="text" name="meta_1" value="Tela de Login">
                </div>

                <div class="form-field">
                    <label>Meta 2</label>
                    <input type="text" name="meta_2"  value="Tela de Cadastro">
                </div>

                <div class="form-field">
                    <label>Meta 3</label>
                    <input type="text" name="meta_3"  value="Relatórios">
                </div>

                <div class="form-field">
                    <label>Meta 4</label>
                    <input type="text" name="meta_4" value="MVP Completo" >
                </div>

                <div class="form-field">
                    <label>Meta 5</label>
                    <input type="text" name="meta_5" value="Deploy em produção">
                </div>

                <div class="form-field">
                    <label>Descrição</label>
                    <textarea name="descricao" cols="30" rows="10" value="Descrição do projeto."></textarea>
                </div>
                <input class="btn btn-wide gradient-background" type="submit" value="Salvar">
            </div>
        </form>
    </div>
</div>
</div>


<!-- main content area -->
@include('site.layouts.footer')
