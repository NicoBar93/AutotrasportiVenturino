<x-layout>
    <x-nav service="active"/>
    <div class="container-fluid mt-5 pt-5 ps-5">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1 class="display-4 fw-bold title">Aree servite</h1>
            </div>
            <div class="col-12 col-md-7">
                <h3 class="fw-bold title">Resta aggiornato sulle aree coperte dai nostri servizi.</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 py-5 ">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img class="imgCostum" src="{{ asset('media/MapChart_Map (1).png')}}" alt="Mappa dell'Italia">
            </div>
            <div class="col-12 col-lg-6 bg order-1 order-lg-2">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white pt-5 ps-5 mt-5 ms-5 fs-1">Località servite</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-white pt-5 ps-5 fs-4 sizeMedia">Effettuiamo trasporti nelle regioni di seguito indicate, come visibile anche nella mappa raffigurata:</p>
                    </div>
                    <div class="col-12">
                        <div>
                            <ul class="list-square">
                                @foreach ($regions as $region)
                                    <li class="customLi">{{$region['name']}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>
                        <button class="border-0 fw-bold fs-4 btnCustomServ p-1 sizeMedia">Richiedi Preventivo <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="customSize">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg></button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>