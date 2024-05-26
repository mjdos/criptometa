@include('site.layouts.header')
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.usuario.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                <span class="gradient-text">Perfil</span>
            </h2>
        </div>
        <div class="user-db-content-area">
            @if (session('status'))
            <div class="stat-number green">
                {{ session('status') }}
            </div>
            @endif

            <form action="#" method="post" class="cryptoki-form" id="personal-info-form">
                @csrf
                <div class="form-group">
                    <div class="form-field">
                        <div class="license-type">Nome Completo</div>
                        <label class="label">
                            <font size='5'>{{$usuario->name ?? ''}}</font>
                        </label>
                    </div>
                </div>

                <div class="form-group">

                    <div class="form-field">
                        <div class="license-type">E-mail</div>
                        <label class="label">
                            <font size='5'>{{$usuario->email ?? ''}}</font>
                        </label>
                    </div>
                    <div class="form-field">
                        <div class="license-type">Telefone Principal</div>
                        <div class="label">
                            <font size='5'>{{$usuario->telefone ?? '(xx)xxxxx-xxxx'}}</font>
                        </div>
                    </div>

                </div><br>
                <hr>
                <div class="payment-history">
                    <h5>Endereço</h5>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label">Estado</th>
                                </th>
                                <th scope="col" class="heading-label">Cidade</th>
                                <th scope="col" class="heading-label">Endereço</th>
                                <th scope="col" class="heading-label">Casa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Date">
                                    <div class="date"></div>
                                </td>
                                <td data-label="Method">
                                    <div class="item-title">
                                    </div>
                                </td>
                                <td data-label="Amount" class="stat-value"></td>
                                <td data-label="price" class="stat-value"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <a href="{{route('profile.edit',$usuario->id)}}" class="btn btn-wide btn-dark">Atualizar Cadastro</a>
            </form>
        </div>

    </div>

</div>
<!-- main content area -->
@include('site.layouts.footer')
