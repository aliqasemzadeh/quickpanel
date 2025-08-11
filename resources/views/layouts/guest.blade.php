<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? "" }}</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>

@vite('resources/js/app.js')
@livewire('slide-over-pro')
@livewireScripts
</body>
</html>
