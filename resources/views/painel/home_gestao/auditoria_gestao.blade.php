@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Transações</span>
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
                                    <th class="min-w-125px ps-2 rounded-start">Método</th>
                                    <th class="min-w-125px">Para</th>
                                    <th class="min-w-125px">Quantidade</th>
                                </tr>
                            </thead>

                            <tbody>
                            
                                <tr>
                                    <td style="padding-left: 10px;">0x1fad948c</td>
                                    <td style="padding-left: 15px;">0x2757aF8ED9dE7C235d7ef47F0AC0A9d459bD7f06</td>
                                    <td>2 CCM</td>
                                </tr>
                                
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>


            </div>
    </div>
</div>

@include('painel.layout.footer')
