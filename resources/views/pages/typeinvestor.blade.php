<x-layout.head>
    @vite(['resources/lib/alpine.js'])
    <div class="type {{$typeCamps['background']}}">
        <div x-data="{ step: 1 }">
            <div x-show="step === 1">
                <div class="svg-type">
                    @if ($typeCamps["id"] == 1)
                    @include('pages.typeinvestor.conservador')
                    @elseif ($typeCamps["id"] == 2)
                    @include('pages.typeinvestor.moderado')
                    @elseif ($typeCamps["id"] == 3)
                    @include('pages.typeinvestor.agressivo')
                    @endif
                </div>
                <div class="text">
                    <h1>seu perfil é <span class="{{$typeCamps['type']}}">{{$typeCamps["type"]}}</span></h1>
                    <h2>O quê isso significa?</h2>
                    <div class="description">
                        <p>{{$typeCamps["description"]}}</p>
                    </div>
                    <button class="step-button" @click.prevent="step = 2">
                        <i class="bi bi-arrow-down"></i>
                    </button>
                </div>
            </div>

            <div x-show="step === 2">
                <div class="text">
                    <button class="step-button" @click.prevent="step = 1">
                        <i class="bi bi-arrow-up"></i>
                    </button>
                    <div class="paragraph {{$typeCamps['paragraph']}}">
                        <p>{{$typeCamps["info-paragraph-1"]}}</p>
                        <p>{{$typeCamps["info-paragraph-2"]}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.head>