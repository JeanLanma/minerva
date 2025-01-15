<section>
    <div class="p-8 bg-main-light">

        <div class="max-w-7xl mx-auto">
            
            <div class="mb-8">
                
                <h2 class="text-3xl font-bold">
                    Nuestras habitaciones
                </h2>
                <span class="border-b-4 border-main block sm:w-80 w-full my-2"></span>
            </div>
            
            <!-- <div class="md:columns-xs/*[20rem 320px]*/ lg:columns-sm/*[24rem 384px]*/ xl:columns-xl/*[36rem 576px]*/"> -->
            <div class="grid md:grid-cols-2 md:gap-4 justify-between">
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/simple.jpg')}}" alt="Habitación simple">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Estándar King
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Esta habitación doble cuenta con artículos de aseo gratuitos, baño privado con ducha, armario, TV de pantalla plana y 1 cama.
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li title="WIFI"><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li title="Aire acondicionado"><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li title="servicio a la habitacion" ><svg class="w-10" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H80c0-97.2 78.8-176 176-176s176 78.8 176 176h48c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z"/></svg></li>
                            <li title="Television"><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li title="Alberca"><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                            <!-- <li title="Desayunos"><img class="w-10" src="{{ asset('assets/icons/fork-knife-outlined.svg') }}" alt="service"></li> -->
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/Doble.jpg')}}" alt="Habitación Doble">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Estándar doble
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Esta habitación doble cuenta con 2 camas individuales, armario, TV de pantalla plana y baño privado con ducha y artículos de aseo gratuitos.
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li title="WIFI"><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li title="Aire acondicionado"><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li title="servicio a la habitacion" ><svg class="w-10" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H80c0-97.2 78.8-176 176-176s176 78.8 176 176h48c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z"/></svg></li>
                            <li title="Television"><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li title="Alberca"><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                            <!-- <li title="Desayunos"><img class="w-10" src="{{ asset('assets/icons/fork-knife-outlined.svg') }}" alt="service"></li> -->
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8 break-before-column">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/master.jpg')}}" alt="Habitación Master">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Master suite
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Esta habitación triple cuenta con artículos de aseo gratuitos, baño privado con ducha, armario, TV de pantalla plana y 3 camas.
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li title="WIFI"><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li title="Aire acondicionado"><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li title="servicio a la habitacion" ><svg class="w-10" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H80c0-97.2 78.8-176 176-176s176 78.8 176 176h48c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z"/></svg></li>
                            <li title="Television"><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li title="Alberca"><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                            <!-- <li title="Desayunos"><img class="w-10" src="{{ asset('assets/icons/fork-knife-outlined.svg') }}" alt="service"></li> -->
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8 break-before-column">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/urban.jpg')}}" alt="Habitación Urban">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Urban Suite
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Esta habitación triple cuenta con artículos de aseo gratuitos, baño privado con ducha, armario, TV de pantalla plana y 3 camas.
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li title="WIFI"><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li title="Aire acondicionado"><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li title="servicio a la habitacion" ><svg class="w-10" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H80c0-97.2 78.8-176 176-176s176 78.8 176 176h48c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z"/></svg></li>
                            <li title="Television"><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li title="Alberca"><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                            <!-- <li title="Desayunos"><img class="w-10" src="{{ asset('assets/icons/fork-knife-outlined.svg') }}" alt="service"></li> -->
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>


        </div>
        
    </div>
        
    </div>
</section>