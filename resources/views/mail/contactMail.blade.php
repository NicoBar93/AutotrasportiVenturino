<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <p>Salve,</p>
    <p>Abbiamo ricevuto una richiesta di trasporto, le informazioni sono di seguito indicate:</p>
    <p>Tipo di trasporto: <span class="fw-bold">{{$content['tipoTrasporto']}}</span></p>
    <p>Da: <span class="fw-bold">{{$content['cittaPartenza']}}, {{$content['regionePartenza']}}</span></p>
    <p>A: <span class="fw-bold">{{$content['cittaDestinazione']}}, {{$content['regioneDestinazione']}}</span></p>
    <p>Data richiesta di consegna: <span class="fw-bold">{{$content['dataConsegna']}}</span></p>
    <p>Sono state inoltre inserite le seguenti informazioni: <span class="fw-bold">{{$content['descrizioneCarico']}}</span></p>
    <p>I riferimenti di contatto sono i seguenti:
        email: <span class="fw-bold">{{$content['email']}}</span> <br>
        telefono: <span class="fw-bold">{{$content['telefono']}}</span>
    </p>
</body>
</html>