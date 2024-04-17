@include('layouts.app')

<h1 class="text-center">Portafolio de servicios</h1>

<section class="container mt-5">
    @if (auth()->user()->rol == 1)
        <button class="btn btn-primary">Nuevo servicio</button>
    @endif

    <div class="row">
        @foreach ($portfolio as $item)
            <div class="col-md-4 mt-3">
                <div class="center-content">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('./images/' . $item->image) }}" class="card-img-top" alt="people">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->smallDescription }}</p>
                            @auth
                                <button class="btn btn-warning" onclick="modalEdit({{$item->id}})">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            @else
                                <button class="btn btn-primary btn-purple">Ver más</button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <input type="hidden" id="url" value="{{ route('portfolio.index') }}">

  <script src=""></script>
  <script src="{{ asset('./js/portfolio.js') }}"></script>