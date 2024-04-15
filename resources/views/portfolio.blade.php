@include('layouts.app')

<h1 class="text-center">Portafolio de servicios</h1>

<section class="container mt-5">
    @if (auth()->user()->rol == 1)
        <button class="btn btn-primary">Nuevo servicio</button>
    @endif
</section>

{{
    $portfolio
}}
