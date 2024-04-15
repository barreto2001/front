@include('layouts.app')
<h1 class="text-center">Contacto</h1>

<section class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="mt-3">
                <h5>Correo Electrónico</h5>
                <span>
                    example@example.com
                </span>
            </div>

            <div class="mt-3">
                <h5>Celular (Whatsapp)</h5>
                <span>
                    +57 312 441 6441
                </span>
            </div>

            <div class="mt-3">
                <h5>PBX</h5>
                <span>
                    (601) 441 6441
                </span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombres" class="col-md-4 col-form-label text-md-end">{{ __('Nombre y apellido') }}</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="name" value="{{ old('nombres') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="product" class="col-md-4 col-form-label text-md-end">{{ __('Producto de interés') }}</label>

                            <div class="col-md-6">
                                <select name="product" id="">
                                    <option value="">Seleccione...</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="comment" class="col-md-4 col-form-label text-md-end">{{ __('Comentarios') }}</label>

                            <div class="col-md-6">
                                <textarea name="comment" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>