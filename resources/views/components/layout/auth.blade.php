<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('components.layout.css')
    @vite(['resources/js/theme.js'])
</head>

<body>

    <div class="auth-page container">

        <div class="auth-card">
            <div class="auth-text">
                <div class="auth-text-content">
                    <div class="square-form">
                        <div>
                            <p class="text-card-left m-0">o próximo passo na sua </p>
                            <p class="text-card-left highlighted m-0">jornada</p>
                        </div>
                        <div class="bottom-left-form m-0">
                            <p class="text-bottom-left">Faça o seu cadastro na QINVEST◢ e participe dessa
                                comunidade</p>

                            <svg width="100" height="100" viewBox="0 0 130 129" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_106_1406)">
                                    <path
                                        d="M72.122 0V36.2363H36.0593V72.4726H0V108.706L20.3082 129H130V20.2945L109.692 0H72.122ZM94.9761 22.8502H124.675V123.646H22.8541V95.322H58.9134V59.0865H94.9761V22.8502Z"
                                        fill="white" fill-opacity="0.56" />
                                </g>
                                <defs>
                                    <filter id="filter0_b_106_1406" x="-4" y="-4" width="138" height="137"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                        <feComposite in2="SourceAlpha" operator="in"
                                            result="effect1_backgroundBlur_106_1406" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_106_1406"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auth-form">
                <div class="auth-form-content">

                    <div class="d-flex flex-column">
                        <div class="text-right-card">
                            <p class="m-0"> Olá!
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45"
                                fill="none">
                                <path
                                    d="M24.9649 0V12.4827H12.4827V24.9654H0V37.4481L7.02982 44.4392H19.5125H31.9947H45V6.99111L37.9702 0H24.9649ZM27.5417 1.32193H37.0842L41.9015 6.10999H32.359L27.5417 1.32193ZM26.2869 2.55701L31.114 7.35538V16.9172L26.2869 12.1189V2.55701ZM32.8759 7.87184H43.1564V42.5951H7.91095V32.8372H20.3936V20.3545H32.8759V7.87184ZM15.059 13.8042H25.0419L29.8596 18.5927H19.8767L15.059 13.8042ZM13.8042 15.0397L18.6318 19.8376V29.3999L13.8042 24.6016V15.0397ZM2.57636 26.2869H12.5592L17.3769 31.0753H7.39406L2.57636 26.2869ZM1.3215 27.5224L6.1491 32.3203V41.4418L1.3215 36.6439V27.5224Z"
                                    fill="#3A3A3A" />
                            </svg>
                        </div>
                        <p class="m-0">Registre-se rapidamente preenchendo os campos.</p>
                    </div>


                    {{ $slot }}



                </div>

            </div>
        </div>
    </div>
</body>

</html>