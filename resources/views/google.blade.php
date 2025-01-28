<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header -------------------------------------->
        <div class="flex justify-end p-3 space-x-5 text-sm items-center">
            <a class="hover:underline" href="#">Gmail</a>
            <a class="hover:underline" href="">Images</a>
            <!--svg-->
            <div class="p-2 hover:bg-slate-200 hover:rounded-full">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C5.10457 2 6 2.89543 6 4C6 5.10457 5.10457 6 4 6C2.89543 6 2 5.10457 2 4C2 2.89543 2.89543 2 4 2ZM12 2C13.1046 2 14 2.89543 14 4C14 5.10457 13.1046 6 12 6C10.8954 6 10 5.10457 10 4C10 2.89543 10.8954 2 12 2ZM22 4C22 2.89543 21.1046 2 20 2C18.8954 2 18 2.89543 18 4C18 5.10457 18.8954 6 20 6C21.1046 6 22 5.10457 22 4ZM4 10C5.10457 10 6 10.8954 6 12C6 13.1046 5.10457 14 4 14C2.89543 14 2 13.1046 2 12C2 10.8954 2.89543 10 4 10ZM14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12ZM20 10C21.1046 10 22 10.8954 22 12C22 13.1046 21.1046 14 20 14C18.8954 14 18 13.1046 18 12C18 10.8954 18.8954 10 20 10ZM6 20C6 18.8954 5.10457 18 4 18C2.89543 18 2 18.8954 2 20C2 21.1046 2.89543 22 4 22C5.10457 22 6 21.1046 6 20ZM12 18C13.1046 18 14 18.8954 14 20C14 21.1046 13.1046 22 12 22C10.8954 22 10 21.1046 10 20C10 18.8954 10.8954 18 12 18ZM22 20C22 18.8954 21.1046 18 20 18C18.8954 18 18 18.8954 18 20C18 21.1046 18.8954 22 20 22C21.1046 22 22 21.1046 22 20Z" fill="#000000"/>
                </svg>
            </div>
            <button class="bg-blue-600 text-white p-2 rounded-2xl font-medium hover:shadow-lg">
                Sign in
            </button>
        </div>

    <!-- Logo -------------------------------------->
        <div class="flex justify-center mt-5">
            <img class="w-1/3 md:w-1/5 " src="{{ asset('images/google_logo.png') }}" alt="">
        </div>

    <!-- Search Box -------------------------------------->
        <div class="flex justify-center mt-5">
            <div>
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.5C4.75329 0.5 0.5 4.75329 0.5 10C0.5 15.2467 4.75329 19.5 10 19.5C12.082 19.5 14.0076 18.8302 15.5731 17.6944L20.2929 22.4142C20.6834 22.8047 21.3166 22.8047 21.7071 22.4142L22.4142 21.7071C22.8047 21.3166 22.8047 20.6834 22.4142 20.2929L17.6944 15.5731C18.8302 14.0076 19.5 12.082 19.5 10C19.5 4.75329 15.2467 0.5 10 0.5ZM3.5 10C3.5 6.41015 6.41015 3.5 10 3.5C13.5899 3.5 16.5 6.41015 16.5 10C16.5 13.5899 13.5899 16.5 10 16.5C6.41015 16.5 3.5 13.5899 3.5 10Z" fill="#000000"/>
                </svg>
                <div>
                    <input type="text" class="outline-0">
                </div>
                <!--Mic svg-->
                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 9C5.55228 9 6 9.44772 6 10V11C6 14.3137 8.68629 17 12 17C15.3137 17 18 14.3137 18 11V10C18 9.44772 18.4477 9 19 9C19.5523 9 20 9.44772 20 10V11C20 15.0803 16.9453 18.4471 12.9981 18.9383C12.9994 18.9587 13 18.9793 13 19V21C13 21.5523 12.5523 22 12 22C11.4477 22 11 21.5523 11 21V19C11 18.9793 11.0006 18.9587 11.0019 18.9383C7.05466 18.4471 4 15.0803 4 11V10C4 9.44772 4.44772 9 5 9Z" fill="#152C70"/>
                    <path d="M12 2C9.79086 2 8 3.79086 8 6V11C8 13.2091 9.79086 15 12 15C14.2091 15 16 13.2091 16 11V6C16 3.79086 14.2091 2 12 2Z" fill="#4296FF"/>
                </svg>
                <!--Camera svg-->
                <svg class="h-8 w-8" viewBox="0 -43.5 1111 1111" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M807.497143 256h92.16c56.32 0 102.4 46.08 102.4 102.4v464.457143-32.914286h-87.771429v87.771429h85.577143c-10.24 46.08-51.2 80.457143-100.205714 80.457143h-687.542857c-56.32 0-102.4-46.08-102.4-102.4v-431.542858h87.771428v453.485715h716.8v-541.257143h-802.377143c10.24-46.08 51.2-80.457143 100.205715-80.457143h92.16l34.377143-106.788571c14.628571-46.08 66.56-83.382857 114.834285-82.651429l215.771429 2.194286c48.274286 0.731429 98.011429 38.765714 110.445714 85.577143l27.794286 101.668571z m-382.537143-102.4l264.777143 2.925714 49.005714 179.931429h-373.028571l59.245714-182.857143z" fill="#0C92F3" /><path d="M563.2 570.514286m-80.457143 0a80.457143 80.457143 0 1 0 160.914286 0 80.457143 80.457143 0 1 0-160.914286 0Z" fill="#A8C8E6" /><path d="M563.2 650.971429c24.868571 0 46.811429-10.971429 61.44-28.525715-135.314286-47.542857-5.12-2.194286-141.897143-51.931428 0 44.617143 35.84 80.457143 80.457143 80.457143z" fill="#61B6F2" /><path d="M634.88 607.085714c5.851429-10.971429 8.777143-23.405714 8.777143-36.571428 0-44.617143-35.84-80.457143-80.457143-80.457143 71.68 117.028571 2.194286 3.657143 71.68 117.028571z" fill="#FC830A" /><path d="M819.2 566.857143c0-143.36-116.297143-259.657143-259.657143-259.657143s-259.657143 116.297143-259.657143 259.657143 116.297143 259.657143 259.657143 259.657143 259.657143-116.297143 259.657143-259.657143z m-431.542857 0c0-95.085714 76.8-171.885714 171.885714-171.885714s171.885714 76.8 171.885714 171.885714-76.8 171.885714-171.885714 171.885714-171.885714-76.8-171.885714-171.885714z" fill="#0C92F3" /><path d="M738.742857 338.651429h-372.297143l58.514286-185.051429h262.582857z" fill="#FFFFFF" /></svg>
            </div>

        </div>


</body>
</html>
