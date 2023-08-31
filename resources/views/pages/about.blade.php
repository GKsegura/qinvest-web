<div class="page">
    <!--
        Essa página ainda precisa dos textos.
        Além disso, os cards precisam ser finalizados. Eles precisam da foto de cada membro, das funções corretas,
        e de uma mini descrição. Finalmente, todos os itens do card precisam ser redimensionados corretamente.
    -->
    <div class="container about-page">
        <div class="header-page">

            <p class="h1">
                Sobre nós
            </p>

            <p>
                O interesse pelo mercado financeiro tem se tornado crescente nos últimos anos. As
                inúmeras possibilidades de investimentos fazem com que muitos tenham dúvidas sobre qual
                opção escolher e, por contarem com baixo conhecimento na área, adiam suas atividades e
                acumulação de patrimônio.
            </p>
            <p>
                Em busca de facilitar o contato dos indivíduos, principalmente os jovens, com o universo
                dos investimentos, nossa equipe de TCC - formada por sete alunos do terceiro ano de
                informática do Colégio Técnico Industrial “Prof. Isaac Portal Roldán” - desenvolveu o software
                QInvest.
            </p>
            <p>
                Sendo assim, o QInvest é um sistema que oferece conteúdo educacional, além de identificar
                perfis investidores e integrar a lucratividade das principais rendas fixas e variáveis em tempo
                real. Ademais, focamos em desenvolver um site que apresenta uma fácil usabilidade e cores que
                trazem um caráter jovial, incentivando no aprendizado e interação do usuário.
            </p>
        </div>
    </div>
    <section class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/davi.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Davi Saito</p>
                    <p class="card-occupation">Programador de banco de dados e suporte técnico</p>
                    <p class="card-description">Responsável por integrar as
                        informações do site e armazená-las em um banco de dados. Ademais, auxiliou outros membros
                        da equipe.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/deola.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Deolindo Neto</p>
                    <p class="card-occupation"> Programador e suporte técnico</p>
                    <p class="card-description">Responsável por desenvolver as páginas do usuário
                        - como cadastros e login -, além de auxiliar em atividades de banco de dados e demais membros
                        da equipe.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/duda.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Eduarda Garbullio</p>
                    <p class="card-occupation">Gerente de Projetos</p>
                    <p class="card-description">Estabeleceu os prazos de atividades, assegurou a coesão e
                        organização da equipe e realizou pesquisas e estudos acerca do universo dos investimentos, a
                        fim de documentar o software e auxiliar na área educacional do site.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/enrico.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Enrico Grossi</p>
                    <p class="card-occupation">Administrativo e suporte técnico</p>
                    <p class="card-description">Responsável por elaborar as questões da
                        gerenciamento e apropriação de custos. Ademais, elaborou pesquisas e assegurou o
                        desenvolvimento do software.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/gui.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Guilherme Diorio</p>
                    <p class="card-occupation">Desenvolvedor Full Stack</p>
                    <p class="card-description"> Garantiu a programação e a funcionalidade de diversas
                        páginas do site, trabalhando no design e prestando apoio à gerência técnica.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/isaac.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Isaac Levi</p>
                    <p class="card-occupation">Designer Técnico</p>
                    <p class="card-description">Construiu a identidade visual do software e da equipe, atuando na
                        programação e integrando todas as áreas de desenvolvimento.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/jose.jpg" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">José Segura</p>
                    <p class="card-occupation">Gerente Técnico</p>
                    <p class="card-description">Responsável por definir as atividades de programação e garantir a
                        coesão da equipe, junto à gerência de projetos. Desenvolveu e auxiliou na programação e
                        verificou as funcionalidades do site. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 300,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
    </script>
</div>