<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

{{--        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>--}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">

        <div x-data="{name: 'Steve Rogers'}">

            <div class="bg-green-400 p-4 m-4 rounded">
                <span x-text="name"></span>
            </div>

            <div class="bg-slate-200 m-4 p-4 rounded">
                <span x-text="name"></span>
            </div>

        </div>

    </body>
</html>
