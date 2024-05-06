@include('site.layouts.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    
    @include('site.usuario.menu')

    <div class="main-content-area sales-statement">
        <div class="page-title-section">
            <h2><span class="gradient-text">Meus</span> Projetos</h2>
        </div>
            
            <div class="statement-list">

                <div class="statement">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label">Nome</th>
                                <th scope="col" class="heading-label">Data do projeto</th>
                                <th scope="col" class="heading-label">Carteira</th>
                                <th scope="col" class="heading-label"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projetos as $projeto)
                                <tr>
                                    <td>{{ $projeto->nome }}</td>
                                    <td>{{ $projeto->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $projeto->carteira }}</td>
                                    <td style="padding-right: 0px;">
                                        <a href="{{ route('projeto_usuario', $projeto->id) }}"  class="btn btn-fullwidth gradient-background">
                                        <i class="bi bi-backspace-fill"></i>
                                            Detalhes
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
