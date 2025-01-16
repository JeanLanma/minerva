<section>

    <div class="px-8 py-[5.5rem] flex flex-wrap max-w-7xl mx-auto">
        <div class="lg:w-1/2 w-full">
            <h2 class="text-3xl font-bold">
                Hotel FCH Minerva
            </h2>
            <span class="border-b-4 border-main block lg:w-72 my-2"></span>
            <p class="text-xl">
                En el corazón Guadalajara
            </p>
            <br>
            <p class="lg:pr-8 text-justify text-dark-text mb-8 lg:mb-0">
                Reinventamos el concepto del “Hotel Boutique” para entregarte una estancia placentera y siempre a tu medida. 
                Sin importar el motivo de tu viaje, en nuestro hotel creamos una experiencia de hospedaje especialmente
                pensada para ti y tus distintas necesidades mientras tú te encargas de tus distintas ocupaciones.
            </p>
            <div class="h-3 xl:h-8"></div>
            <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                <button class="cta-main-button w-full sm:w-80 bg-main">
                    <span>Reservar Ahora</span>
                </button>
            </a>
            <div class="h-14 lg:hidden"></div>
        </div>
        <!-- -->
        <div class="lg:w-1/2 overflow-hidden card-shadow">
            <img class="w-full bg-cover object-cover h-full lg:h-[36rem]" src="{{ asset('assets/img/about.jpg') }}" alt="About us Image">
        </div>
    </div>

</section>