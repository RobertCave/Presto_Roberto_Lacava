<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto - </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="page-top">
    <x-navbar />

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            
                {{ $slot }}
            
        </div>
    </section>

    <x-footer />
</body>

</html>
