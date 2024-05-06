@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Projetos</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('home.index')}}"  class="btn btn-sm btn-primary">
                            <i class="bi bi-backspace-fill"></i>
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">
                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-125px ps-2 rounded-start">Nome do projeto</th>
                                    <th class="min-w-125px">Descrição</th>
                                    <th class="min-w-125px">Carteira</th>
                                    <th class="min-w-125px ">Data de registro</th>
                                    <th class="min-w-125px rounded-end">Visualizar projeto</th>
                                </tr>
                            </thead>

                            <tbody>
                            <tbody>
                                @foreach ($projetos as $projeto)
                                <tr>
                                    <td style="padding-left: 10px;">{{ $projeto->nome }}</td>
                                    <td style="padding-left: 15px;">{{ $projeto->descricao }}</td>
                                    <td>{{ $projeto->carteira }}</td>
                                    <td>{{ $projeto->created_at->format('d/m/Y') }}</td>
                                    <td style="padding-left: 30px;">
                                        <a   class="btn btn-sm btn-info">
                                            <i class="bi bi-info-circle" style="padding-left: 2px;"></i>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


            </div>
    </div>
</div>

@include('painel.layout.footer')
