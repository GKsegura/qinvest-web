<x-layout.app>
    <div class="type {{$typeCamps['background']}}">
        @if ($typeCamps["id"] == 2)
        @include('pages.typeinvestor.conservador')
        @elseif ($typeCamps["id"] == 3)
        @include('pages.typeinvestor.moderado')
        @elseif ($typeCamps["id"] == 4)
        @include('pages.typeinvestor.agressivo')
        @endif
        <div class="text">
            <h1>seu perfil é <span class="{{$typeCamps['type']}}">{{$typeCamps["type"]}}</span></h1>
            <h2>O quê isso significa?</h2>
            <p>{{$typeCamps["description"]}}</p>
            <p>{{$typeCamps["info"]}}</p>
        </div>
    </div>
</x-layout.app>