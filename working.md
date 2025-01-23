Tailwind Basics:::

Typography..
1. Font Family 

    font-sans
    font-serif
    font-mono 

ipo namaley oru custom font ah choose pannanum nu nenacha.. 

Google Fonts -> Select Your Font -> Get font -> Get Embed code -> copy that link tag code ->paste that in inside of the header file     

then tailwind.confiq.js ku poi..

    theme: {
        extend: {
            fontFamily: {
                lora: ['"Lora", serif'] ,       #intha mari kuduthukanum.. lora name kuduthurukom la athu enna name venum nalum kuduthukalam.. 
            },
        },
    },

then intha create panna font ah class la kuduthu use pannikalam..
    <p class="font-lora">This Text uses Font Family</p>
intha mari.. 

ithey mari yethana custom font venum nalum config file la declare panni .. class la kuduthu use panikalam.. 

2. Text Size
    "text-xs"
    "text-sm"
    "text-base"
    "text-lg"
    "text-xl"
    "text-2xl"

ithey mari 5xl vara use pannikalam ..  athuku mela small or big ah venum naa .. tailwind oda config file ku poi modify panikalam.. 

theme: {
    fontSize: {
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
      '6xl': '4.205rem',   -> this is we created
    }

then text size ah screen ku yetha maari responsive aavum mathikalam.. 

    <p class="text-base md:text-lg lg:text-xl">Responsive Text this is </p>

<!--Other Font Classes-->

    font-bold

suppose ipo oru para la oru word ah mattum highlight panni kaatanum nu nenecha..
        <p>
        <span class="font-bold underline">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
intha mari span la kuduthu .. design pannikalam.. 

than intha mari multiple ah single class file kulla kudukalam.. 
    <h1 class="text-3xl font-bold">Sample <span class="font-light">Title</span></h1>

# Line Height

    leading-10

line height yethu venumo athuku yetha maari.. num ah change pannikalam

or num ku pathila intha mariyum kudukalam.. 
 
    leading-none	
    leading-tight	
    leading-snug	
    leading-normal	
    leading-relaxed	
    leading-loose	

# Colors

-> Background Colors:::
    bg-green-50
    bg-green-100
    bg-green-200
    bg-green-300
    bg-green-500

then ithey mari nammaley custom color kooda kuduthukalam.. 

        extend: {
            colors: {
                'pure-red': '#f44747'
            },
inga ipdi kuduthuttu.. antha 'pure-red' ndra property use panni enga venum nalum yeluthikalam..

        <div class="h-8 bg-pure-red"></div>

-> Text Colors:::

    text-green-400
    text-gray-700
etc.. 

intha mari text nu kuduthuttu athuku pinnadi enna color venumo athu kuduthukalam.. 

athey mari bg ku use panna custom color ah text kum use pannikalam.. 

# Padding and Margin 

    p-1
    p-2
    p-3
    p-4
intha mari 32 vara kudukalam.. 

    <button class="text-gray-700 bg-amber-200 p-4">Click Me</button>

suppose ella pakamum padding kudukka venam nu nenacha .. only we want right and left

    px-4

suppose enaku mela keela mattum padiing venum nu nenacha ..

    py-4

innum oru sila classes um iruku ..

p-0	    padding: 0px;
px-0	padding-left: 0px; padding-right: 0px;
py-0	padding-top: 0px; padding-bottom: 0px;
ps-0	padding-inline-start: 0px;
pe-0	padding-inline-end: 0px;
pt-0	padding-top: 0px;
pr-0	padding-right: 0px;

padding vanthu button ulla gap vara use panrom.. 

ithuvey namaku button ku veliya gap venum nu nenacha athuku than margin use panrom.. 

m-0	    margin: 0px;
mx-0	margin-left: 0px; margin-right: 0px;
my-0	margin-top: 0px; margin-bottom: 0px;
ms-0	margin-inline-start: 0px;
me-0	margin-inline-end: 0px;
mt-0	margin-top: 0px;
mr-0	margin-right: 0px;


# Border 

    border border-red-500
intha button la border create panlam .. ipo intha border oda width innum konjam athigama venum nu nenachaa.. 

antha border property la ..

    border-4 border-red-500

ipdi kudukalam.. 

innnum ithula neraiya property iruku.. 

border-0	border-width: 0px;
border-2	border-width: 2px;
border-4	border-width: 4px;
border-8	border-width: 8px; border	border-width: 1px;

border-x-0	border-left-width: 0px; border-right-width: 0px;
border-x-2	border-left-width: 2px; border-right-width: 2px; 
border-x-4	border-left-width: 4px; border-right-width: 4px;
border-x-8	border-left-width: 8px; border-right-width: 8px;
border-x	border-left-width: 1px; border-right-width: 1px;

border-y-0	border-top-width: 0px; border-bottom-width: 0px;
border-y-2	border-top-width: 2px; border-bottom-width: 2px;
border-y-4	border-top-width: 4px; border-bottom-width: 4px;
border-y-8	border-top-width: 8px; border-bottom-width: 8px;
border-y	border-top-width: 1px; border-bottom-width: 1px;

border-s-0	border-inline-start-width: 0px;
border-s-2	border-inline-start-width: 2px;
border-s-4	border-inline-start-width: 4px;
border-s-8	border-inline-start-width: 8px;
border-s	border-inline-start-width: 1px;

border-e-0	border-inline-end-width: 0px;
border-e-2	border-inline-end-width: 2px;
border-e-4	border-inline-end-width: 4px;
border-e-8	border-inline-end-width: 8px;
border-e	border-inline-end-width: 1px;

border-t-0	border-top-width: 0px;
border-t-2	border-top-width: 2px;
border-t-4	border-top-width: 4px;
border-t-8	border-top-width: 8px;
border-t	border-top-width: 1px;

border-r-0	border-right-width: 0px;
border-r-2	border-right-width: 2px;
border-r-4	border-right-width: 4px;
border-r-8	border-right-width: 8px;
border-r	border-right-width: 1px;

border-b-0	border-bottom-width: 0px;
border-b-2	border-bottom-width: 2px;
border-b-4	border-bottom-width: 4px;
border-b-8	border-bottom-width: 8px;
border-b	border-bottom-width: 1px;

border-l-0	border-left-width: 0px;
border-l-2	border-left-width: 2px;
border-l-4	border-left-width: 4px;
border-l-8	border-left-width: 8px;
border-l	border-left-width: 1px;

ithula mukkiyama note panna vendiyathula ennana.. ithoda width - 2 , 4 , 8 , 16 intha mari than increase aagumm.. 

# Border Radius 

Box mari iruka edges ah round ah maathalam.. 


rounded-none	border-radius: 0px;
rounded-sm	    border-radius: 0.125rem; /* 2px */
rounded	        border-radius: 0.25rem; /* 4px */
rounded-md	    border-radius: 0.375rem; /* 6px */
rounded-lg	    border-radius: 0.5rem; /* 8px */
rounded-xl	    border-radius: 0.75rem; /* 12px */
rounded-2xl	    border-radius: 1rem; /* 16px */
rounded-3xl	    border-radius: 1.5rem; /* 24px */
rounded-full

athey mari x axis la radius aaganuma illa y axis la radius aaganuma apdi ndrathaiyum , kudukalam.. 

# Hover

<button class="text-gray-700 bg-yellow-300 px-4 py-4 mt-4 ml-4 border-4 border-red-500 rounded-xl hover:bg-white">Click Me</button>

antha button la naan -> hover:bg-white -> itha kuduthathunaala ennachunaa.. naan mouse ah button mela kondu pogum pothu athoda bg color yellow to white ah aaguthu.. 

hover:text-green-500  then athulaiye innoru hover kudukuren.. so ipo mouse ah hover pannum pothu bg and text color rendumey change aaguthu..

# Layout

 <!--Layout-->
            <div class="container border border-red-400 mt-10 mx-auto rounded-lg ">
                <h1 class="pt-3 pl-4"> You are Making Parents Proud</h1>
                <p class="p-4">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                    "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...""Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                    "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>

                <div class="flex justify-center">
                    <button class="text-gray-700 bg-yellow-300 px-4 py-4 mt-4 ml-4 border-4 border-red-500 rounded-xl hover:bg-white hover:text-green-500 my-3">Click Me</button>
                </div>

            </div>

The container class in Tailwind CSS is like a box that helps keep your drawing (or content) neatly centered on the paper.

<div class="container mx-auto"> it makes that container center whatever it happens..

then if we want to move the button in center .. first we should put that in div .. then use flex justify-center

# Responsive classes

ithu epo use aagum naa .. screen size ku yetha mari olu sila vishayatha mathurathu.. 

for example mobile , laptop , pc , tablet ovoru screen ku yetha mari, webpage la yethavathu kaatanum nu nenacha ithu use aagum.. 




    
