@include('site.layouts.header')
<style>
    /* Estilos básicos para o layout */
    .container-campanha {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        overflow: hidden;
        /* Para limpar floats */
    }

    .caixa {
        width: 48%;
        /* Define a largura das divs */
        float: left;
        /* Faz com que as divs fiquem lado a lado */
        margin-right: 2%;
        /* Margem entre as divs */
        background-color: #f0f0f0;
        padding: 10px;
        box-sizing: border-box;
        /* Inclui padding na largura */
        text-align: center;
        border-radius: 20px;
    }

    @media (max-width: 768px) {

        /* Responsivo: uma embaixo da outra em telas menores */
        .box {
            width: 100%;
            float: none;
            margin-right: 0;
            margin-bottom: 20px;
        }
    }

    h2 {
        text-align: center;
    }

    ul {
        padding-left: 20px; /* Espaçamento à esquerda para a lista */
        text-align: left;
    }
    ul li {
        list-style: none; /* Remover o marcador padrão */
        position: relative; /* Criar um contexto para o pseudo-elemento */
        padding-left: 20px; /* Espaçamento para acomodar a bolinha */
    }
    ul li:before {
        content: "●"; /* Usar um círculo como marcador */
        color: red; /* Cor da bolinha */
        position: absolute;
        left: 0;
    }

    p {
        text-align: left;
        font-weight: bold
    }

</style>
<div class="primary-content-area container content-padding">
    <div class="single-post medium-section">
        <div class="post-heading">

            <div class="page-title-section">
                <h2>Escolha a modalidade da sua nova <span class="gradient-text">Campanha</span>:</h2>
            </div>

            <div class="container-campanha">
                <div class="caixa">
                    <h2 align="center"><span class="gradient-text"> Contínua</span></h2>
                    <p>Contínua por mês</p>
                    <ul class="list-group">
                        <li>Campanha sem prazo para terminar.</li>
                        <li>Apoiadores(as) são cobrados todos os meses.</li>
                        <li>Ideal para: Fazeres contínuos.</li>
                    </ul>
                    <br>
                    <div class="bc-button"><a class="btn btn-wide btn-dark" href="{{route('site.campanha')}}">Escolher Modalidade</a></div>
                </div>
                <div class="caixa">
                    <h2 align="center"><span class="gradient-text"> Pontual</span></h2>
                    <p>Pontual com meta livre</p>
                    <ul class="list-group">
                        <li>Campanha tem prazo certo para acabar.</li>
                        <li>Apoiadores(as) são cobrados apenas uma vez.</li>
                        <li>Ideal para: projetos com início, meio e fim.</li>
                    </ul>
                    <br>
                    <div class="bc-button"><a class="btn btn-wide btn-dark" href="{{route('site.campanha')}}">Escolher Modalidade</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('site.layouts.footer')
