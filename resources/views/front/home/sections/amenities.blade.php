<section>

    <div class="space-y"></div>
    <div class="bg-main-light flex md:grid md:grid-cols-2 flex-col-reverse">

        <div class="px-4 md:mx-auto">
            <h3 class="font-bold text-3xl my-11">Contamos con</h3>

            <ul>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">~</span> Alberca climatizada</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">~</span> Pequeño estacionamiento</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">~</span> Internet gratis</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">~</span> Próximamente restaurante</li>
            </ul>

            <div class="my-16">
                <a href="{{ route('services') }}">
                    <button class="w-36 h-12 font-bold bg-main text-white text-sm">ver todos</button>
                </a>
            </div>
        </div>

        <div>
            <img class="w-full max-h-[630px] object-cover" src="{{ asset('assets/img/services/alberca.jpg') }}" alt="Hotel alberca">
        </div>

    </div>
</section>