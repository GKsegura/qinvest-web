<x-layout.app>
    @if ($investor === 2)
    @include('pages.typesOfInventor.conservador')
    @elseif ($investor === 3)
    @include('pages.typesOfInventor.moderado')
    @elseif($investor === 4)
    @include('pages.typesOfInventor.agressivo')
    @endif
</x-layout.app>