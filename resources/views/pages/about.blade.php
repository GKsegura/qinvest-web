@include('layouts.header')
<div class="page">
    <!--
        Essa página ainda precisa dos textos.
        Além disso, os cards precisam ser finalizados. Eles precisam da foto de cada membro, das funções corretas,
        e de uma mini descrição. Finalmente, todos os itens do card precisam ser redimensionados corretamente.
    -->
    <div class="container">
        <div class="header-page text-start">

            <p class="h1">
                Sobre nós
            </p>
            <p class="h2">
                Um projeto bla bla bla
            </p>
            <p>
                lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem
                lorem lorem lorem lorem lorem lorem lorem lorem lorem lore

            </p>
            <p>
                lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem
                lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem
                lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem
                lorem lorem lorem lorem lorem lorem lorem
            </p>
        </div>
    </div>
    <section class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Davi Saito</p>
                    <p class="card-occupation">Desenvolvedor</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Deolindo Neto</p>
                    <p class="card-occupation">Desenvolvedor</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Eduarda Garbullio</p>
                    <p class="card-occupation">Líder de Projeto & Desenvolvedor</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Enrico Grossi</p>
                    <p class="card-occupation">Desenvolvedor</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Guilherme Diorio</p>
                    <p class="card-occupation">Desenvolvedor</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">Isaac Levi</p>
                    <p class="card-occupation">Desenvolvedor</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card-image">
                    <img src="assets/dio.png" alt="">
                </div>
                <div class="card-content">
                    <p class="card-name">José Segura</p>
                    <p class="card-occupation">Líder Técnico & Desenvolvedor</p>
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
@include('layouts.footer')