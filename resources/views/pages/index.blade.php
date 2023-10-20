<x-layout.app>

    @auth
    <script>
    toastr.error('Você está logado!');
    </script>
    @endauth
    <div class="page-home">
        <img class="wave-svg" src="assets/waveBg.svg" alt="">
        <div class="homebox">
            <div class="text-image-ladder">
                <p class="h1">Investimento simples e direto</p>
                <p class="m-0 p-0phpj">QINVEST◢ pode ser a solução para você mudar seu destino.</p>
                <p>Crie sua conta gratuitamente e comece a participar dessa comunidade</p>
            </div>
            <div class="buttons-home">
                <button id="login">Entrar</button>
                <button id="register">Criar Conta</button>
            </div>
            <div class="stair">
                <img class="home-art" src="assets/home_art.svg" alt="">
            </div>
            <div class="feature">
                <p class="h3" id="alter">
                    Do básico ao avançado:
                </p>
                <p class="h1" id="alter">
                    Conseguir uma renda extra ou mudar completamente sua vida. </p>
                </p>
                <p class="h3" id="alter">
                    Confira os planos QINVEST◢:
                </p>

                <div class="plan-mother">
                    <div class="plan" id="basic">
                        <div class="plan-name" id="basic">
                            <p>Basic◢</p>
                        </div>
                        <div class="plan-content" id="basic">
                        </div>
                    </div>
                    <div class="plan" id="advanced">
                        <div class="plan-name" id="advanced">
                        <p>Advanced◢</p>
                        </div>
                        <div class="plan-content" id="advanced">
                        </div>
                    </div>
                      <div class="plan" id="unlimited">
                            <div class="plan-name" id="unlimited">
                            <p>Unlimited◢</p>
                            </div>
                            <div class="plan-content" id="unlimited">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</x-layout.app>