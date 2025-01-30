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
        <div x-data="{
            selectedImageUrl: 'https://images.unsplash.com/photo-1737994872505-385ecc9a06e7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            show: false,
            inputValue: 'Hello'
        }">
            <img class="w-96 h-96" :class="{'hidden': !show }"  x-bind:src="selectedImageUrl" alt="">
            <input type="text" :value="inputValue" :style="{color: 'red'}">
        </div>
    </body>
</html>
