{{-- Footer --}}
<footer class="mc-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Body Text</h3>
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            Contacto
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}">
                            Portafolio
                        </a>
                    </li>
                    @guest
                    <li>
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            Login
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Contacto</h3>
                <ul>
                    <li>Correo Electrónico: example@example.com</li>
                    <li>Celular (Whatsapp): +57 312 441 6411</li>
                    <li>PBX: (601) +57 441 6411</li>
                </ul> 
            </div>
            <div class="col-md-4">
                <h3>Portafolio</h3>
                <ul>
                    <li>Integración de Sistemas y APIs.</li>
                    <li>Migración de Plataformas Web.</li>
                    <li>Desarrollo de Aplicaciones Web Personalizadas.</li>
                    <li>Diseño y Desarrollo de Sitios Web Responsivos.</li>
                </ul>
            </div>
        </div>
    </div>
</footer>