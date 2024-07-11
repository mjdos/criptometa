@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">

    @include('site.usuario.menu')

    <div class="main-content-area">
        <div class="page-title">
            <h2> Adicionar <span class="gradient-text">SubMetas</span></h2>
            <br>
            <div>
                <div class="featured-box-wrapper grid-4-columns">
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">22</span></div>
                                <div class="featured-item-image">
                                    <a href="05-product.html">
                                        <img src="{{ asset('storage/imagens/' . $projeto->imagem) }}" alt=""></a>

                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category ui-templates">
                                        UI templates
                                    </div>
                                    <div class="title"><a href="05-product.html">{{$projeto->titulo}}</a>
                                    </div>
                                    <div class="item-meta"><span class="avatar box-26"><a href="/cryptoki-html/"><img src="img/avatar.png" alt=""></a><span class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>{{$usuario->name}}</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
                                <div class="item-price" style="text-align: center">{{$projeto->meta}}</div>
                            </div>
                        </div>
                        <div class="statement">
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="heading-label">Nome</th>
                                        <th scope="col" class="heading-label">Detalhes Meta </th>
                                        <th scope="col" class="heading-label">Percentual</th>
                                        <th scope="col" class="heading-label">Valor</th>
                                    </tr>
                                </thead>
                                @foreach($submetas as $submeta)

                                <tbody>
                                    <tr>
                                        <td data-label="Date">
                                            <div class="date">{{ $submeta->nome}}</div>
                                        </td>
                                        <td data-label="Item details">
                                            <div class="license-details">{{ $submeta->descricao}}</div>
                                        </td>
                                        <td data-label="price" class="stat-value">{{ $submeta->percentual}}%</td>
                                        <td data-label="fee" class="stat-value"> R${{ ($submeta->percentual / 100) * $submeta->projeto->meta }}</td>
                                    </tr>
                                </tbody>


                                @endforeach
                            </table>
                        </div>
                    </div>


                </div>

                <div class="user-db-content-area">
                    @if (session('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                position: 'top'
                                , title: 'Sucesso!'
                                , text: '{{ session('
                                success ') }}'
                                , icon: 'success'
                                , showConfirmButton: true
                            });
                        });

                    </script>
                    @endif

                    @if (session('success2'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                position: 'top'
                                , title: 'Sucesso!'
                                , text: '{{ session('
                                success2 ') }}'
                                , icon: 'success'
                                , showConfirmButton: true
                            });
                        });

                    </script>
                    @endif

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

                    <form class="cryptoki-form" method="POST" action="{{ route('sub_meta.store') }}">
                        @csrf
                        <input type="hidden" name="projeto_id" value="{{ $projetoId }}">

                        <div class="form-field">
                            <label for="nome">Nome da Submeta</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
                        </div>

                        <div class="form-field">
                            <label for="descricao">Descrição da Submeta</label>
                            <textarea name="descricao" id="descricao" class="form-control" required>{{ old('descricao') }}</textarea>
                        </div>

                        <div class="form-field">
                            <label for="percentual">Percentual</label>
                            <input type="number" name="percentual" id="percentual" class="form-control" value="{{ old('percentual') }}" required>
                        </div>

                        <input class="btn btn-wide gradient-background" type="submit">
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
