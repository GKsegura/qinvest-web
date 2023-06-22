@include('layouts.header')
<div class="page">
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
        <div class="body-page mySwiper">

            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
                <div class="card swiper-slide">
                    <div class="card-image">
                        <img src="assets/dio.png" alt="">
                    </div>

                    <div class="card-content">
                        <p class="card-name">Diolindo Scandinava</p>
                        <p class="card-occupation">Stripper</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var appendNumber = 4;
        var prependNumber = 1;
        document
            .querySelector(".prepend-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
    </script>
</div>
@include('layouts.footer')
