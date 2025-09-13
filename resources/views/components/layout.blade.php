<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roshan Hub</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container{
            width: 86%;
            margin: auto;
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')
<header>
    <x-navbar/>
</header>
<main class="container">
    {{$slot}}
</main>
<footer></footer>
</body>
</html>
