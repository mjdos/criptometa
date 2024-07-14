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
                                        <th scope="col" class="heading-label"></th>
                                    </tr>
                                </thead>
                                @foreach($submetas as $submeta)

                                <tbody>
                                    
									<tr id="tr_{{ $submeta->id }}">
                                        <td data-label="Date">
                                            <div class="date">{{ $submeta->nome}}</div>
                                        </td>
                                        <td data-label="Item details">
                                            <div class="license-details">{{ $submeta->descricao}}</div>
                                        </td>
                                        <td data-label="price" class="stat-value">{{ $submeta->percentual}}%</td>
                                        <td data-label="fee" class="stat-value"> R${{ ($submeta->percentual / 100) * $submeta->projeto->meta }}</td>
                                        <td><button type="button" class="btn btn-sm btn-light-danger" onClick="return excluir('{{ $submeta->id }}');">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            Excluir
                                        </button></td>
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
                        Toastify({
                        text: "{{ session('success') }}",
                        duration: 3000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                        onClick: function(){} // Callback after click
                        }).showToast(); 
                    </script>
                    @endif

                    @if (session('success2'))
                    <script>
                        Toastify({
                        text: "{{ session('success2') }}",
                        duration: 3000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                        onClick: function(){} // Callback after click
                        }).showToast(); 
                    </script>
                    @endif

                    @if ($errors->any())
                    
                    <script>
                        Toastify({
                            text: "@foreach ($errors->all() as $error){{ $error }}@endforeach",
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            style: {
                                background: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red gradient
                            }
                        }).showToast();
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
<script>
    function excluir(id) {

        var headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

        Swal.fire({
            title: 'Tem certeza que deseja excluir?',
            text: "Não será possível reverter essa ação.",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!'
        }).then((result) => {

            if (typeof(result.value) != "undefined" && result.value == true) { // Se foi apertado o botão de "Sim, excluir"

                $.ajax({
                    url: "{{ route('sub_meta.destroy', '') }}/" + id,
                    type: "DELETE",
                    headers: headers,
                    success: function(data) {

                        var message = '';
                        var success = false;
                        
                        $.each(data, function(campo, conteudo) {
                            if (campo == 'success') {
                                success = conteudo;
                            }
                            if (campo == 'message') {
                                message = conteudo;
                            }
                        });

                        if (success) {
                            $('#tr_' + id).remove();
                            Swal.fire({ icon: 'success', title: 'Sucesso!', text: message });
                        } else {
                            Swal.fire({ icon: 'error', title: 'Oops...', text: message });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({ icon: 'error', title: 'Oops...', text: 'Ocorreu um erro ao tentar deletar a meta extra.' });
                    }
                });

            }

        })
    }
</script>
<!-- main content area -->
@include('site.layouts.footer')
