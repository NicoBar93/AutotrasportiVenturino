<x-layout>
    <x-nav contact="active" />
    <div class="container-fluid cntCs py-5 ">
        <div class="row">
            <div class="col-12 col-lg-5 opacityMedia">       
                <form action="{{route('contact.send')}}" method="POST">
                    @csrf
                    <label for="tipoTrasporto">Tipo di trasporto:*</label>
                    <select class="form-select" name="tipoTrasporto" id="tipoTrasporto" required>
                        <option value="" disabled selected>Seleziona il tipo di trasporto</option>
                        <option value="Motrice">Motrice</option>
                        <option value="Motrice con Rimorchio">Motrice con Rimorchio</option>
                        <option value="Merci ADR">Merci ADR</option>
                    </select>

                    <h3>Da:</h3>
                    <label for="cittaPartenza">Città:*</label>
                    <input type="text" id="cittaPartenza" name="cittaPartenza" required>

                    <label for="regionePartenza">Regione:*</label>
                    <select class="form-select" aria-label="Seleziona la regione" name="regionePartenza" id="regionePartenza" required>
                        <option value="" disabled selected>Seleziona la regione</option>
                        @foreach ($regions as $region)
                            <option value="{{$region->name}}">{{$region->name}}</option>
                        @endforeach
                    </select>
                    

                    <h3>Destinazione:</h3>
                    <label for="cittaDestinazione">Città:*</label>
                    <input type="text" id="cittaDestinazione" name="cittaDestinazione" required>

                    <label for="regioneDestinazione">Regione:*</label>
                    <select class="form-select" aria-label="Seleziona la regione" name="regioneDestinazione" id="regioneDestinazione" required>
                        <option value="" disabled selected>Seleziona la regione</option>
                        @foreach ($regions as $region)
                            <option value="{{$region->name}}">{{$region->name}}</option>
                        @endforeach
                    </select>
                    

                    <label for="dataConsegna">Data richiesta di consegna:</label>
                    <input type="date" id="dataConsegna" name="dataConsegna">

                    <h3>Informazioni Carico:</h3>
                    <label for="descrizioneCarico">Gentilmente descrivete il vostro carico:</label>
                    <textarea id="descrizioneCarico" name="descrizioneCarico" rows="4"></textarea>

                    {{-- <h3 class="mb-3">Servizi aggiuntivi richiesti:</h3>
                    <label><input type="checkbox" id="assicurazioneCarico" name="assicurazioneCarico"> Assicurazione carico</label>
                    <label><input type="checkbox" id="merciInfiammabili" name="merciInfiammabili"> Merci infiammabili</label> --}}

                    <h3>Informazioni di contatto:</h3>
                    <label for="email">Email:*</label>
                    <input type="email" id="email" name="email" required>

                    <label for="telefono">Telefono:*</label>
                    <input type="tel" id="telefono" name="telefono" required>

                    <button class="btnColor fw-bold buttonContact" type="submit">Invia Richiesta</button>
                </form>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>