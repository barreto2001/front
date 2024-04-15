@include('layouts.app')
{{-- Main o hero landing page de la pagina --}}
<main class="container mb-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="display-4">
                Desarrollador Web <br>
                Full Stack
            </h1>
            <p class="text-left">
                Desarrollador web fulls tack con 2 años de experiencia en
                tecnologías front-end y back-end. Experto en Angular, Node.js,
                java y bases de datos SQL/NoSQL. Fuerte capacidad para
                diseñar e implementar soluciones digitales innovadoras y
                escalables. Comprometido con la calidad del código y la
                experiencia del usuario. Habituado a trabajar en equipos
                multidisciplinarios bajo metodologías ágiles.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('./images/anthony-riera-kylWNDQFd5A-unsplash.jpg') }}" alt="photo_carlos">
        </div>
    </div>
</main>

{{-- Estadisticas  --}}
<section class="container mc-100">
    <div class="row">
        <div class="col-md-3">
            <h3 class="display-6 text-center color-black">+3</h3>
            <div class="text-center w-100 color-black">Empresas</div>
        </div>
        <div class="col-md-3">
            <h3 class="display-6 text-center color-black">+16</h3>
            <div class="text-center w-100 color-black">Proyectos</div>
        </div>
        <div class="col-md-3">
            <h3 class="display-6 text-center color-black">+35 K</h3>
            <div class="text-center w-100 color-black">Usuarios</div>
        </div>
        <div class="col-md-3">
            <h3 class="display-6 text-center color-black">+10</h3>
            <div class="text-center w-100 color-black">Tecnologías</div>
        </div>
    </div>
</section>

{{-- Portafolio --}}
<section class="container">
    <h2 class="text-center display-5">Portafolio de servicios</h2>
    <p>
        Ofrecemos soluciones digitales de vanguardia, desde consultoría hasta desarrollo y mantenimiento, para impulsar
        tu éxito en línea. Con enfoque en la innovación y la satisfacción del cliente, nuestro equipo te guiará en cada
        paso hacia una presencia digital excepcional. ¡Haz realidad tus ideas con nosotros!
    </p>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="center-content">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('./images/Rectangle_37.png') }}" class="card-img-top" alt="people">
                    <div class="card-body">
                        <h5 class="card-title">Aplicaciones Web Personalizadas:</h5>
                        <p class="card-text">Desarrollo de aplicaciones web a medida para satisfacer las necesidades
                            específicas de tu negocio.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-purple">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="center-content">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('./images/Rectangle_37.png') }}" class="card-img-top" alt="people">
                    <div class="card-body">
                        <h5 class="card-title">Integración de Sistemas y APIs:</h5>
                        <p class="card-text">Conexión de sistemas y servicios externos para una funcionalidad ampliada
                            en tu
                            aplicación web.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-purple">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="center-content">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('./images/Rectangle_37.png') }}" class="card-img-top" alt="people">
                    <div class="card-body">
                        <h5 class="card-title">Migración de Plataformas Web:</h5>
                        <p class="card-text">Transferencia segura y eficiente de datos y funcionalidades entre
                            plataformas
                            web.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-purple">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('login') }}">
            <button class="btn btn-primary">
                Ver más servicios
            </button>
        </a>
    </div>
</section>

{{-- Ventajas --}}
<section class="container">
    <h2 class="text-center display-5">Portafolio de servicios</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
        <div class="col-md-3">
            <div class="cm-alert">Mayor Eficiencia en el desarrollo</div>
        </div>
    </div>
</section>

{{-- Testimonios --}}
<section class="container">
    <h2 class="text-center display-5">Portafolio de servicios</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('./images/Rectangle174.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Juan Villegas</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam suscipit nulla sed dolor maximus, eu consequa</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('./images/Rectangle_74.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Karol Pulido</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('./images/Rectangle174.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Juan Villegas</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam suscipit nulla sed dolor maximus, eu consequa</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('./images/Rectangle_74.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Karol Pulido</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam suscipit nulla sed dolor maximus, eu consequa</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')