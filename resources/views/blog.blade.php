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
                  <ul class="hidden md:flex space-x-6">
                      <li><a class="text-black font-medium hover:text-indigo-500" href="#">Services</a></li>
                      <li><a class="text-black font-medium  hover:text-indigo-500" href="#">Pricing</a></li>
                      <li><a class="text-black font-medium  hover:text-indigo-500" href="#">About</a></li>
                      <li><a class="text-black font-medium  hover:text-indigo-500" href="#">Contact</a></li>
                  </ul>
                  <button class="hidden md:block bg-green-500 px-6 py-2 rounded-full text-white hover:bg-blue-600 font-medium ">Signup</button>
                  <button class="md:hidden mobile-icon ">
                      <svg class="h-10 w-10 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </button>
              </nav>
          </div>

    <!--Mobile Nav Section------------------------------------------------------------------------->
    <div class="md:hidden mobile-menu">
        <ul class="flex flex-col items-center space-y-6">
            <li><a class="text-black font-medium hover:text-indigo-500" href="#">Services</a></li>
            <li><a class="text-black font-medium  hover:text-indigo-500" href="#">Pricing</a></li>
            <li><a class="text-black font-medium  hover:text-indigo-500" href="#">About</a></li>
            <li><a class="text-black font-medium  hover:text-indigo-500" href="#">Contact</a></li>
            <li> <button class=" bg-green-500 px-6 py-2 rounded-full text-white hover:bg-blue-600 font-medium ">Signup</button></li>
        </ul>
    </div>

    <!--Hero Section------------------------------------------------------------------------->
            <div class="container mx-auto mt-12 flex flex-col md:flex-row ">
                <div class="md:w-1/2 text-center">
                    <p class="mt-6">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like
                    </p>
                    <button class="bg-indigo-500 text-white px-6 py-2 rounded-full mt-6 font-medium"> Get Started</button>
                </div>
                <div class="md:w-1/2">
                    <img class="mx-auto" src="{{ asset('images/hero.png') }}" alt="">
                </div>
            </div>


    <!--Main Section------------------------------------------------------------------------->
    <div class="container mx-auto flex flex-col md:flex-row gap-12 mt-12 ">
        <div class="md:w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl">Web Development</h1>
            <img class="h-40 w-40" src="{{ asset('images/website.png') }}" alt="">
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
        </div>

        <div class="md:w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl" >Mobile App Development</h1>
            <img class="h-40 w-40" src="{{ asset('images/mobile_content.png') }}" alt="">
            <p>
                "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.
            </p>
        </div>

        <div class="md:w-1/3 text-center flex flex-col items-center">
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

            <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mt-4 sm:mx-32 md:mx-10">

{{--                div 1--}}
                <div class="relative mt-4 bg-indigo-100 w-80 rounded-2xl hover:shadow-2xl text-center ">
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

        <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mx-32">

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
    <footer class="bg-gray-200 mt-12">
        <div class="container mx-auto flex flex-col md:flex-row sm:gap-5 py-10 md:pt-32">
            <!-- 25% -->
            <div class="w-1/4">
                <p class="font-medium text-2xl">Rj Code</p>
            </div>
            <!-- 50% -->
            <div class="w-1/2 flex flex-col md:flex-row">
                <div class="pr-24">
                    <h2 class="text-2xl font-bold">Links</h2>
                    <ul class="space-y-2 mt-4">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                </div>

                <div class="pr-24">
                    <h2 class="text-2xl font-bold">Links</h2>
                    <ul class="space-y-2 mt-4">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                </div>

                <div class="pr-24">
                    <h2 class="text-2xl font-bold">Links</h2>
                    <ul class="space-y-2 mt-4">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                </div>

            </div>
            <!-- 25% -->
            <div class="w-1/4 flex justify-end gap-4 ">
                <button>
                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#0F0F0F"/>
                    </svg>
                </button>
                <button>
                    <svg class="h-10 w-10" fill="#000000" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                         viewBox="0 0 31.812 26">
                        <path d="M20.877,2.000 C22.519,2.000 24.382,2.652 25.426,3.738 C26.724,3.486 27.949,3.025 29.050,2.386 C28.625,3.687 27.718,4.779 26.540,5.469 C27.693,5.332 28.797,5.035 29.820,4.590 C29.054,5.707 28.087,6.690 26.971,7.477 C26.981,7.715 26.987,7.955 26.987,8.195 C26.987,15.562 21.445,24.000 10.939,24.000 C7.715,24.000 4.507,23.133 1.982,21.551 C2.428,21.605 2.883,21.631 3.343,21.631 C6.019,21.631 8.482,20.740 10.439,19.242 C7.937,19.199 5.827,17.586 5.103,15.373 C5.450,15.437 5.810,15.473 6.178,15.473 C6.696,15.473 7.203,15.406 7.681,15.277 C5.068,14.768 3.100,12.514 3.100,9.813 C3.100,9.787 3.100,9.764 3.100,9.740 C3.871,10.158 4.750,10.410 5.687,10.440 C4.154,9.437 3.147,7.734 3.147,5.799 C3.147,4.777 3.428,3.818 3.919,2.998 C6.735,6.367 10.945,8.588 15.693,8.822 C15.594,8.414 15.543,7.984 15.543,7.553 C15.543,4.473 17.721,2.000 20.877,2.000 M29.820,4.590 L29.825,4.590 M20.877,-0.000 C17.033,-0.000 14.060,2.753 13.614,6.552 C10.425,5.905 7.524,4.204 5.440,1.711 C5.061,1.257 4.503,0.998 3.919,0.998 C3.867,0.998 3.815,1.000 3.763,1.004 C3.123,1.055 2.547,1.413 2.216,1.966 C1.525,3.122 1.159,4.447 1.159,5.799 C1.159,6.700 1.321,7.579 1.625,8.400 C1.300,8.762 1.113,9.238 1.113,9.740 L1.113,9.813 C1.113,11.772 1.882,13.589 3.160,14.952 C3.087,15.294 3.103,15.655 3.215,15.998 C3.657,17.348 4.459,18.510 5.499,19.396 C4.800,19.552 4.079,19.631 3.343,19.631 C2.954,19.631 2.577,19.609 2.222,19.565 C2.141,19.556 2.061,19.551 1.981,19.551 C1.148,19.551 0.391,20.078 0.108,20.886 C-0.202,21.770 0.140,22.753 0.932,23.249 C3.764,25.023 7.318,26.000 10.939,26.000 C17.778,26.000 22.025,22.843 24.383,20.195 C27.243,16.984 28.907,12.718 28.972,8.455 C29.899,7.682 30.717,6.790 31.410,5.792 C31.661,5.458 31.810,5.041 31.810,4.590 C31.810,3.909 31.473,3.308 30.958,2.946 C31.181,2.176 30.925,1.342 30.303,0.833 C29.940,0.537 29.496,0.386 29.049,0.386 C28.708,0.386 28.365,0.474 28.056,0.654 C27.391,1.040 26.680,1.344 25.931,1.562 C24.555,0.592 22.688,-0.000 20.877,-0.000 L20.877,-0.000 Z"/>
                    </svg>
                </button>
                <button>
                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#0F0F0F"/>
                        <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#0F0F0F"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#0F0F0F"/>
                    </svg>
                </button>
            </div>

        </div>

    </footer>

    <script>
        const MobileIcon = document.querySelector('.mobile-icon')
        const MobileMenu = document.querySelector('.mobile-menu')

        MobileIcon.addEventListener('click', () => {
            MobileMenu.classList.toggle('hidden')
        })

    </script>
    </body>
</html>
