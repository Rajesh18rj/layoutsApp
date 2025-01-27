<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog Project</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
    <!--Navbar------------------------------------------------------------------------->
          <div class="container mx-auto bg-green-200">
              <nav class="flex justify-between items-center">
                  <div class="h-16 w-16">
                      <a href="#"> <img class="rounded-full" src="https://picsum.photos/200" alt=""></a>
                  </div>
                  <ul class="flex space-x-6">
                      <li><a class="text-black font-medium hover:text-indigo-500" href="#">Services</a></li>
                      <li><a class="text-black font-medium  hover:text-indigo-500" href="#">Pricing</a></li>
                      <li><a class="text-black font-medium  hover:text-indigo-500" href="#">About</a></li>
                      <li><a class="text-black font-medium  hover:text-indigo-500" href="#">Contact</a></li>
                  </ul>
                  <button class="bg-green-500 px-6 py-2 rounded-full text-white hover:bg-blue-600 font-medium ">Signup</button>
              </nav>
          </div>

    <!--Hero Section------------------------------------------------------------------------->
            <div class="container mx-auto mt-12 flex ">
                <div class="w-1/2 text-center">
                    <p class="mt-6">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like
                    </p>
                    <button class="bg-indigo-500 text-white px-6 py-2 rounded-full mt-6 font-medium"> Get Started</button>
                </div>
                <div class="w-1/2">
                    <img class="mx-auto" src="{{ asset('images/hero.png') }}" alt="">
                </div>
            </div>

    <!--Main Section------------------------------------------------------------------------->
    <div class="container mx-auto flex mt-12">
        <div class="w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl">Web Development</h1>
            <img class="h-40 w-40" src="{{ asset('images/website.png') }}" alt="">
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
        </div>

        <div class="w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl" >Mobile App Development</h1>
            <img class="h-40 w-40" src="{{ asset('images/mobile_content.png') }}" alt="">
            <p>
                "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.
            </p>
        </div>

        <div class="w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl">Design</h1>
            <img class="h-40 w-40" src="{{ asset('images/designer.png') }}" alt="">
            <p>
                "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue;
            </p>
        </div>
    </div>
    <!--Pricing Section------------------------------------------------------------------------->
        <div class="container mx-auto mt-6">
            <div class="text-center">
                <h1 class="font-bold text-green-500 text-3xl">Pricing</h1>
                <p class="text-2xl">Offers Multiple packages for Monthly and Yearly</p>
                <p class="text-2xl">Featured Plans are here</p>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4">

{{--                div 1--}}
                <div class="relative mt-4 bg-indigo-100  w-80 rounded-2xl hover:shadow-2xl text-center ">
                    <h1 class="font-bold text-5xl">$99</h1>
                    <h2 class="text-green-500 mb-3 font-bold">Basic</h2>
                    <p> All the Basic features are included</p>
                    <ul class="ml-4 mb-10">
                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle fill="currentColor"  opacity="0.5" cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5"/>
                                    <path fill="currentColor"  d="M15 12H9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="">
                               Customized Features
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle fill="currentColor"  opacity="0.5" cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5"/>
                                    <path fill="currentColor"  d="M15 12H9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="">
                                Dual Infrastructure
                            </div>
                        </li>

                    </ul>

                    <button class="absolute bottom-0 transform translate-y-5 -translate-x-16 bg-indigo-500 text-white px-6 py-2 rounded-full mt-6 font-medium"> Get Started</button>

                </div>
{{--               div 2--}}
                <div class="relative  w-80 rounded-2xl hover:shadow-2xl text-center border border-4 border-dashed border-indigo-500">
                    <h1 class="font-bold text-5xl">$199</h1>
                    <h2 class="text-green-500 mb-3 font-bold">Advanced</h2>
                    <p> All the Basic features are included</p>
                    <ul class="ml-4 mb-10">
                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Customized Features
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle fill="currentColor"  opacity="0.5" cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5"/>
                                    <path fill="currentColor"  d="M15 12H9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="">
                                Dual Infrastructure
                            </div>
                        </li>

                    </ul>

                    <button class="absolute bottom-0 transform translate-y-5 -translate-x-16 bg-indigo-500 text-white px-6 py-2 rounded-full mt-6 font-medium"> Get Started</button>
                </div>
{{--               div 3--}}
                <div class="relative mt-4 bg-indigo-100  w-80 rounded-2xl hover:shadow-2xl text-center ">
                    <h1 class="font-bold text-5xl">$299</h1>
                    <h2 class="text-green-500 mb-3 font-bold">Business</h2>
                    <p> All the Basic features are included</p>
                    <ul class="ml-4 mb-10">
                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Core Business System
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Customized Features
                            </div>
                        </li>

                        <li class="flex items-center mt-4">
                            <div>
                                <svg class="h-6 w-6 text-indigo-500" text-indigo-500 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM17.8 8.6C18.1314 8.15817 18.0418 7.53137 17.6 7.2C17.1582 6.86863 16.5314 6.95817 16.2 7.4L10.8918 14.4776L8.70711 12.2929C8.31658 11.9024 7.68342 11.9024 7.29289 12.2929C6.90237 12.6834 6.90237 13.3166 7.29289 13.7071L10.2929 16.7071C10.4979 16.9121 10.7817 17.018 11.0709 16.9975C11.3601 16.9769 11.6261 16.8319 11.8 16.6L17.8 8.6Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="">
                                Dual Infrastructure
                            </div>
                        </li>

                    </ul>

                    <button class="absolute bottom-0 transform translate-y-5 -translate-x-16 bg-indigo-500 text-white px-6 py-2 rounded-full mt-6 font-medium"> Get Started</button>
                </div>

            </div>
        </div>

    <!--Stories Section------------------------------------------------------------------------->
    <div class="container mx-auto mt-12">
        <div class="text-center">
            <h1 >Recent Updates</h1>
            <h1 class="text-5xl">Featured Stories</h1>
        </div>

        <div class="grid grid-cols-3 gap-4">

            <div class="bg-gray-200 rounded-2xl text-center hover:shadow-2xl" >
                <img class="mt-4 w-full h-60" src="https://picsum.photos/200" alt="">
                <h1 class="mt-4 text-2xl text-indigo-500">Google Rankings</h1>
                <p class="font-thin my-4">Make it connect with every client world wide</p>
                <a class="text-indigo-500 font-bold hover:text-black" href="">Read More..</a>
            </div>

            <div class="bg-gray-200 rounded-2xl text-center hover:shadow-2xl">
                <img class="mt-4 w-full h-60" src="https://picsum.photos/200" alt="">
                <h1 class="mt-4 text-2xl text-indigo-500">Communication</h1>
                <p class="font-thin my-4">Best Communication for the Business</p>
                <a class="text-indigo-500 font-bold hover:text-black" href="">Read More..</a>

            </div>

            <div class="bg-gray-200 rounded-2xl text-center hover:shadow-2xl">
                <img class="mt-4 w-full h-60" src="https://picsum.photos/200" alt="">
                <h1 class="mt-4 text-2xl text-indigo-500">Remote Working</h1>
                <p class="font-thin my-4">Remote Connectivity for the Consistent </p>
                <a class="text-indigo-500 font-bold hover:text-black" href="">Read More..</a>

            </div>

        </div>

    </div>

    <!--Footer Section------------------------------------------------------------------------->
    <footer class="bg-gray-200 mt-12 h-96">
        <div class="container mx-auto bg-red-300 p-32">
            <!-- 25% -->
            <div class="w-1/4">
                <p class="font-medium text-2xl">Rj Code</p>
            </div>
            <!-- 50% -->
            <div class="w-1/2">
                <div>
                    <h2 class="text-2xl font-bold">Links</h2>
                    <ul class="space-y-2 mt-4">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                </div>
            </div>
            <!-- 25% -->
            <div class="w-1/4">

            </div>

        </div>

    </footer>


    </body>
</html>
