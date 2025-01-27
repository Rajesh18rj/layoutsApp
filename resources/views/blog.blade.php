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
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
        </div>

        <div class="w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl" >Mobile App Development</h1>
            <img class="h-40 w-40" src="{{ asset('images/mobile_content.png') }}" alt="">
            <p>
                "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"            </p>
        </div>

        <div class="w-1/3 text-center flex flex-col items-center">
            <h1 class="text-2xl">Design</h1>
            <img class="h-40 w-40" src="{{ asset('images/designer.png') }}" alt="">
            <p>
                "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
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

            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gray-400 h-40 w-80 rounded-2xl hover:shadow-4xl">
                    <h2 class="text-green-500">Basic</h2>
                </div>

                <div class="bg-gray-400 h-40 w-80 rounded-2xl hover:shadow-4xl">

                </div>

                <div class="bg-gray-400 h-40 w-80 rounded-2xl hover:shadow-4xl">

                </div>
            </div>
        </div>



    </body>
</html>
