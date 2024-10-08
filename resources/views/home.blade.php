<x-layout>
    <x-nav/>
    {{-- SECTION 1 w/Hns  --}}
    <div class="container-fluid mt-5 pt-5">
        <div class="row mb-2">
            <div class="col-12 col-md-6 ps-5">
                <h2 class="fw-bold display-6">Serviamo clienti in tutta Italia</h2>
            </div>
            <div class="col-12 col-md-6 text-end mt-5 pe-5">
                <h5>Trasporti sicuri e consegne puntuali.</h5>
            </div>       
        </div>
    </div>  
    
    {{-- SECTION 2 w/VIDEO  --}}
    <div class="container-fluid position-relative">
        <video class="video" autoplay loop src="{{ asset('media/Video for web.mp4') }}" type="video/mp4">Il tuo browser non supporta il video.</video>
        <button class="border-0 text-white fw-bold btnColor position-absolute p-2 top-0 end-0 mt-5 me-5">RICHIEDI UN PREVENTIVO <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="customSize">
            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg></span>
        </button>
    </div>

    {{-- SECTION 3 w/ABOUT US  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">

            </div>
            <div class="col-12 col-md-6">
                <div class="row flex-column">
                    <div class="border">
                        <p>Trasportiamo con efficienza ogni carico</p></div>
                    <div class="border">
                        <p>
                            Autotrasporti Venturino Pasquale opera con passione e dedizione nel settore dei trasporti da oltre 30 anni. Grazie alla nostra esperienza consolidata, garantiamo consegne puntuali e un servizio affidabile. La nostra mission è la soddisfazione del cliente, costruita sulla fiducia e sull'impegno costante.
                        </p>
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-layout>