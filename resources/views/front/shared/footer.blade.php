<footer>

    <div class="bg-main relative py-16 px-4 flex md:flex-row md:px-6 sm:justify-center flex-col items-center gap-24">

        <div>
            <img class="max-w-xs" src="{{ asset('assets/logow.png') }}" alt="Logo Country Hotel">
        </div>

        <div class="sm:order-3">
            <ul class="grid grid-cols-2 gap-7">
                <li><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                <li><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                <li class="col-span-2 mx-auto w-12"><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/Tiktok.svg') }}" alt="Tiktok"></a></li>
            </ul>
        </div>

        <div class="sm:w-[335px] px-3 text-white">
            <h4>Información de contacto</h4>

            <div class="h-8"></div>

            <div class="flex flex-col gap-10 text-left font-bold">
                <a class="flex gap-2" href="tel:+523333113958">
                    <img src="{{ asset('assets/icons/call-outline.svg') }}" alt="Phone Icon">
                    <div class="flex flex-col justify-center">
                        <span>+52 (33) 3311 3958</span>
                    </div>
                </a>
                <a class="flex gap-2" href="mailto:recepcion@fchminerva.com">
                    <img src="{{ asset('assets/icons/services/mail-outline.svg') }}" alt="Location Icon">
                    <span>recepcion@fchminerva.com</span>
                </a>
                <a class="flex gap-2" href="#">
                    <img src="{{ asset('assets/icons/location-outline.svg') }}" alt="Location Icon">
                    <span>
                        Av. José María Morelos 2070, Arcos Vallarta, 44130 Guadalajara, Jal
                    </span>
                </a>
            </div>
        </div>

    </div>

    <div class="bg-acent p-2">

        <ul class="text-gray font-bold flex flex-wrap gap-2 justify-center">
            <li><a href="{{route('home')}}">Inicio</a></li>
            <li><a href="{{route('installations')}}">Instalaciones</a></li>
            <li><a href="{{route('rooms')}}">Habitaciones</a></li>
            <li><a href="{{route('services')}}">Servicios</a></li>
            <li><a href="{{route('contact')}}">Contacto</a></li>
        </ul>

    </div>

    <div class="bg-acent p-3 text-center">
        <p class="text-white/50 text-sm">
            &copy; 
            <script>document.write(new Date().getFullYear())</script>
            <noscript>2023</noscript>
            Hotel JA Centro. Todos los derechos reservados.
            Powered by <a href="https://pcbtroniks.com" target="_blank" class="font-bold">Pcbtroniks</a>.
        </p>
    </div>

</footer>