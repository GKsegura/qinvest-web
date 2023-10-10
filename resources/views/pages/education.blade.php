<x-layout.app>
<svg class="wave-svg" viewBox="0 0 1425 737" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M-15 737C-15 737 293.277 
    625.263 493.292 621.899C693.306 618.535 797.106 709.304 972.909 686.284C1148.71 
    663.263 1426 533.038 1426 533.038V-100H-15V737Z" fill="url(#paint0_linear_4_1903)"/>
    <defs>
    <linearGradient id="paint0_linear_4_1903" x1="705.5" y1="-100" x2="705.5" y2="737" gradientUnits="userSpaceOnUse">
    <stop stop-color="#DB33F7"/>
    <stop offset="1" stop-color="#3860EC"/>
    </linearGradient>
    </defs>
</svg>
    <div class="page-education">
        <div id="education-page">
        <h1 id="title-education-page" class="text-education-page">Aprenda a Investir</h1>
            <div id="education-guide">
            <div class="education-summary">
                <div class="left-summary">
                    <img src="assets/education2.svg" alt="">
                </div>
                <div class="right-summary">
                    <svg id="qinvestLogoSm" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
                        <path d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
                    </svg>
                    <h2>Curso: </h2>
                    <h1>Começando do zero</h1>
                    <p>Perfeito para quem está começando <br>
                        A coletânea desde o início.</p>
                    <button data-url="./education/fixed">Vamos lá!</button>
                </div>

            </div>
            </div>
        </div>
        <div class="curso">
            <div class="cursoCard">
                <h2 class="cursoTitleFixed">Curso: Renda Fixa</h2>
                <h4 id="cursoSubtitleFixed">Invista de maneira segura</h4>
                <button data-url="./education/fixed" class="cursoContentFixed">
                    <h4 class="contentTitle">O que é Investir?</h4>
                    <h5 id="contentSubtitleFixed">1° Aula - conceitos básicos</h5>
                    <p class="contentText">Ao aplicar seu dinheiro, o investidor “empresta” o valor a uma instituição – já escolhida por ele - a qual devolve um documento, envolvendo informações como a rentabilidade, liquidez, tributações e prazos. Em troca, o investidor recebe uma remuneração condizente ao valor de seu “empréstimo”. Portanto, previamente, faz-se necessário conhecimentos acerca da empresa escolhida e os possíveis riscos atrelados a ela: chances de falência e desvalorizações </p>
                </button>
                <div class="cursoCard">
                    <h2 class="cursoTitleVariable">Guia: Renda Variável</h2>
                    <h4 id="cursoSubtitleVariable">Entre no mercado de ações.</h4>
                    <button data-url="./education/variable" class="cursoContentVariable">
                        <h4 class="contentTitle">O que é renda variável?</h4>
                        <h5 id="contentSubtitleVariable">Parte 1 - saiba por onde começar</h5>
                        <p class="contentText">Renda variável se define como investimentos no qual o retorno e o preço de compra de ativos variam, isto é, não é definido por uma taxa fixa como a SELIC. Devido a esta variabilidade e incerteza dos preços a renda variável tem maior risco de perda, portanto, o formato de renda variável mais importante e no qual recomendamos que iniciantes comecem baseia-se no mercado de ações da bolsa.</p>
                    </button>
                </div>
            </div>
            <svg id="qinvestLogoSmall" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
                <path d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
            </svg>
        </div>
    </div>
    <script>
    // Seleciona todos os botões com o atributo data-url
    const buttonsWithUrl = document.querySelectorAll('button[data-url]');

    // Adiciona um evento de clique a cada botão
    buttonsWithUrl.forEach(function (button) {
        button.addEventListener("click", function () {
            // Obtém a URL da página de destino do atributo data-url
            const destinationUrl = this.getAttribute("data-url");

            // Redireciona o usuário para a URL da página de destino
            window.location.href = destinationUrl;
        });
    });
</script>
</x-layout.app>