<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autotrasporti</title>
    {{-- LOGO TAB  --}}
    <link rel="icon" type="image/png" href="{{asset('media\LogoLeonardo3WhiteBg.png')}}">
    {{-- FONTS GOOGLE  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    {{-- SCRIPT FONTAWESOME  --}}
    <script src="https://kit.fontawesome.com/899c3df2a5.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="min-vh-100">
        {{$slot}}
    </div>

</body>
</html>