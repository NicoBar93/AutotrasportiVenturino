<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation Mail</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <p>Gentile cliente,</p>
    <p>Abbiamo ricevuto la sua richiesta di preventivo per il trasporto indicato, di seguito, le informazioni fornite
    </p>
    <p>Tipo di trasporto: <span class="fw-bold">{{ $content['tipoTrasporto'] }}</span></p>
    <p>Da: <span class="fw-bold">{{ $content['cittaPartenza'] }}, {{ $content['regionePartenza'] }}</span></p>
    <p>A: <span class="fw-bold">{{ $content['cittaDestinazione'] }}, {{ $content['regioneDestinazione'] }}</span></p>
    <p>Data richiesta di consegna: <span class="fw-bold">{{ $content['dataConsegna'] }}</span></p>
    <p>Sono state inoltre inserite, le seguenti informazioni: <span
            class="fw-bold">{{ $content['descrizioneCarico'] }}</span></p>
    <p>I riferimenti di contatto sono i seguenti:
        email: <span class="fw-bold">{{ $content['email'] }}</span>
        telefono: <span class="fw-bold">{{ $content['telefono'] }}</span>
    </p>
    <p>La ricontatteremo al più presto per fornirle il preventivo.</p>
    <p>Grazie per la sua attenzione</p>
    <div>
        <p class="ms-4">Cordiali saluti</p>
        <p class="fst-italic fw-bold ms-4">Autotrasporti Venturino Pasquale</p>
    </div>

</body>

</html>
