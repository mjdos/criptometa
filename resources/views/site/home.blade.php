@include('site.layouts.header')
<div class="container">
    <br><br>
    <div>
        <div class="become-creator-bc-box container-1300">
            <div class="bc-info" style="padding:0px !important">
                <div class="bc-heading" style="margin-bottom:10px !important">
                    <div class="bc-heading-subtitle">Começe agora mesmo</div>
                    <div class="bc-heading-title">Crie o seu <span class="gradient-text">Projeto</span>
                    </div>
                </div>
                <div class="bc-description">
                    Você tem uma ideia inovadora que pode revolucionar o setor de tecnologia? No Criptometa, oferecemos a plataforma perfeita para transformar suas ideias brilhantes em projetos de sucesso. Ao estabelecer metas claras e demonstrar o progresso através de entregas concretas, você não só capta recursos, mas também constrói confiança e visibilidade. Junte-se a uma comunidade de visionários e aproveite uma plataforma de crowdfunding que realmente compreende e apoia as necessidades dos empreendedores de tecnologia. Dê o primeiro passo para fazer história no mundo tecnológico — cadastre seu projeto hoje!
                </div>
                <div class="bc-button"><a class="btn btn-wide btn-dark" href="{{route('site.login')}}">Comece a arrecadar!</a>
                </div>
            </div>
            <div class="bc-image"><img src="img/home.png" alt=""></div>
        </div><br>
        
        <hr size="1"><br>

        <div class="become-creator-bc-box container-1300">
            <div class="bc-image"><img src="img/home2.png" alt=""></div>
            <div class="bc-info" style="padding:0px !important">
                <div class="bc-heading" style="margin-bottom:10px !important">
                    <div class="bc-heading-subtitle">Ajude o sonho nascer</div>
                    <div class="bc-heading-title">Invista em <span class="gradient-text">Projetos</span>
                    </div>
                </div>
                <div class="bc-description">
                Descubra o poder do seu investimento no Criptometa, onde cada contribuição impulsiona o avanço tecnológico e transforma ideias promissoras em soluções tangíveis. Como investidor, você não apenas financia inovações, mas também acompanha cada etapa do progresso, garantindo que seu apoio esteja verdadeiramente fazendo a diferença. Ao investir em projetos com metas definidas e entrega comprovada, você contribui para um futuro mais inovador e tem a oportunidade de fazer parte do sucesso de startups que moldarão o mundo de amanhã. Participe agora e seja um agente de mudança no ecossistema tecnológico e ajude a criar novas startups.
                </div>
                <div class="bc-button"><a class="btn btn-wide btn-dark" href="{{route('projeto.explorar')}}">Comece a Investir</a>
                </div>
            </div>
            
        </div>



    </div>
    <!-- main content area -->
</div>
@include('site.layouts.footer')
