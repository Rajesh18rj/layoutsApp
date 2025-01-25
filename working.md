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

        <div class="bg-gray-300 md:bg-green-400 lg:bg-red-300">
            <p class="text-lg">Background color change</p>
        </div>

ithula pathom naa.. default ah background color gray kuduthurukom.. then screen size medium ah iruntha green ah maarum.. large ah iruntha red ah maarum..

ithey mari screen size base panni oru sila vishayam dynamic ah pannalam..

# flex box 
1)
<div class="container flex">
    <div class="bg-green-400">Content 1</div>
    <div class="bg-blue-400">Content 2</div>
    <div class="bg-red-400">Content 3</div>
</div>

ithu basic ah left to right {Row direction la} ah athukulla iruka content ah yeduthutu poidum..
output:::  Content 1 Content 2 Content 3

or we can use <div class="container flex flex-row"> this is also same 

2)
<div class="container flex flex-col">

flex-col nu kuduthaa , column direction la content ah yeduthuttu poidum .. 
Output::

Content 1
Content 2
Content 3

ithaiye namma responsive ku yetha mariyum kaatalam.. 

<div class="container flex flex-col md:flex-row">
ithula default ah column la theriyum , epo screen size perusa aagutho , apo row ah theriyum.. 
    
# justify content 
intha screen la Content yentha yedathula irukanum ndratha mudivu panrathu than intha justify classes and allign classes

so intha row classes vachey example pakalam..
<div class="container flex flex-row justify-start">

justify-start-> nu kuduthom naa.. row la starting point laiye irukum
justify-center-> now content center ku poidum (row direction la )
justify-end->  ipdi kudutha end la poi nikkum (row direction la )
justify-between -> ipdi kudutha content 1 starting laiyum, content 2 centerlaiyum.. content 3 end laiyum nikkum
justify-around -> ipo namaku .. content 1 ku munnadiyum , content 3 ku pinnadiyum gap venum nu nenacha .. justify around kudukalam .. 

ipo namma panna ithey velaiye nammalala flex-col direction ku panna mudiyathu.. becoz ithoda direction up to down ah irukathunaala , 
so intha mari situations la items classes ah use panlam.. 

# align items 
<div class="container flex flex-col items-center ">

items-center -> ithu enna pannum naa center ku yeduthutu poirum (column direction la )
items-start -> ithu starting la nippaatum..
items-end -> ithu end la nippatum 

so column class ah use pannum pothu .. items class than use pannanum

items-stretch -> ithu enna pannum naa , intha item ku iruka motha width ahyum iluthukm.. 
items-baseline -> ithu enna pannum na .. yevlo width exact ah venumo atha mattum occupy pannum.. extra 1mm kooda yedukathu

so column naa items classes ah use pannanum.. row naa justify classes ah use pananum . 

# flex grow

so ithuku namma flex row ah yeduthukalam.. 

<div class="container flex flex-row">
    <div class="bg-green-400 flex-grow">Content 1</div>       #note here
    <div class="bg-blue-400">Content 2</div>
    <div class="bg-red-400">Content 3</div>
</div>

ipdi kudukum pothu.. first content mattum jasthi width yeduthukuthu.. 
output::
Content1                      Content2 Content3
-------------------------------------------------------------------------------------
<div class="container flex flex-row">
    <div class="bg-green-400 flex-grow">Content 1</div>       #note here
    <div class="bg-blue-400 flex-grow">Content 2</div>        # note here too
    <div class="bg-red-400">Content 3</div>
</div>
ipo pathom naa.. first 2 content ku mattum athiga width irukum.. 3 ku irukathu 
---------------------------------------------------------------------------------------

<div class="container flex flex-row">
    <div class="bg-green-400 flex-grow">Content 1</div>       #note here
    <div class="bg-blue-400 flex-grow">Content 2</div>        # note here 
    <div class="bg-red-400 flex-grow ">Content 3</div>                   # note here too
</div>
ipo pathom naa .. 3 ku same level width iruku .. 
--------------------------------------------------------------------------------------------
    <div class="bg-green-400 flex-grow-0">Content 1</div>       #note here

flex-grow-0 -> ipo first content ku mattum width 0 kuduthaa.. first ku mattum width 0 kudukuren .. matha yellathukum width kudukuren nu meaning 

------------------------------------------------------------------------------------------------------------------------------------------
or we can use 'flex-1' instead of 'flex-grow'


# Grid Layout 
Flex Box mari innoru layout than Grid 

ithula enna pannalam na , Content ah box, box ah seperate pannalam... 

<div class="container grid grid-cols-2 ">                  #note here
    <div class="bg-green-400 flex-1">Content 1</div>
    <div class="bg-blue-400 flex-grow">Content 2</div>
    <div class="bg-red-400 flex-grow">Content 3</div>
    <div class="bg-green-400 flex-1">Content 4</div>
    <div class="bg-blue-400 flex-grow">Content 5</div>
    <div class="bg-red-400 flex-grow">Content 6</div>
</div>

ithu enna pannum naa.. content ah column direction la 2 ah pirichidum..

Content 1                               Content 2
Content 3                               Content 4
Content 5                               Content 6

intha mari.. 

suppose
[grid grid-cols-3]  3nu kudutha.. 3 column ah pirichidum..
Content 1          Content 2             Content 3        
Content 4          Content 5             Content 6       
   
intha marii.. 

intha mari 4 , 5 , 6 evlo venalum kaatalam.. 

ipo intha box ku naduvula gap venum nu nenacha gap nu oru class iruku.. 
<div class="container grid grid-cols-2 gap-3">                  #note here

gap-0 
gap-1
gap-2
etc...

intha mari evlo gap venum nu nenachalum gap add pannikalam.. 

# Dark Mode 
this one for who loves dark mode 

Namma website ku dark mode ah epdi support panna vaikurathu ndrthu than paaka porom..

<button class="text-xl bg-slate-950 text-white p-3 rounded m-10 "> Click Me </button>

ithu normal oru button irukathu , suppose dark mode la iruntha entha mari irukanum ndratha namma responsive ah mathurathuku .. 
dark nu oru class iruku ..

(dark:bg-slate-300 dark:text-black)
<button class="text-xl bg-slate-950 text-white p-3 rounded m-10 dark:bg-slate-300 dark:text-black"> Click Me </button>

then body oda background um black ah maranum nu nenacha.. 
<body class="bg-white dark:bg-black"> 

default ah white color la irukum... dark mode select pannita black ah maridum.. 

# extend options (configurations)
extend: {
    colors: {
        'pure-red': '#f44747',
        'rj-orange': '#e64a19'
    },
intha mari nammaley color ah create panni use pannikalam.. 
text-rj-orange

colors mariye font weight yum kudukalam.. 

fontWeight: {
    'rjbold' : 500
    },

font-rjbold

ithey mari font size kooda extend la pottu anga irunthu use pannikalam.. 

# override options 
extend la new ah yethavathu venum naa create pannuvom.. 

but already irukatha change pananum nu nenacha ??

for example ovoru responsive class oda screen size enna nu mudivu pannikalam.. 

go to -> tailwind css -> responsive design 
anga already ovoru screen kum evlo width irukanum ndratha default ah yeluthi vachurukanga .. sm ku ivlo irukanum, md ku ivlo width , lg ivlo width etcc.. 
intha maari 

    Breakpoint prefix	  Minimum width	    CSS

                    sm	  40rem (640px)	    @media (width >= 40rem) { ... }
                    md	  48rem (768px)	    @media (width >= 48rem) { ... }
                    lg	  64rem (1024px)	@media (width >= 64rem) { ... }
                    xl	  80rem (1280px)	@media (width >= 80rem) { ... }
                    2xl	  96rem (1536px)	@media (width >= 96rem) { ... }

namaku venum naa atha change pannikalam..

    screens: {
        'tablet': '640px',
        'laptop': '1024px',
        'desktop': '1280px',
        }

then itha use pannikalam..
    <button class="text-xl bg-rj-orange text-black font-rjbold p-3 rounded m-10 tablet:bg-blue-500 laptop:bg-yellow-200 desktop:bg-green-400  "> Click Me </button>
tablet . laptop . desktop nu name kuduthathuku bathila md lg xl nu kooda kudukalam.. athey mari size yum namaku vendiya mari increase or decrease pannikalam.. 

# Extract Components 
    <button class="bg-pink-300 text-black border-2 p-4 rounded-lg tablet:bg-blue-500 laptop:bg-yellow-200 desktop:bg-green-400 m-10 "> Hey Hello </button>
    <button class="bg-pink-300 text-black border-2 p-4 rounded-lg tablet:bg-blue-500 laptop:bg-yellow-200 desktop:bg-green-400 m-10 "> Welcome  </button>
    <button class="bg-pink-300 text-black border-2 p-4 rounded-lg tablet:bg-blue-500 laptop:bg-yellow-200 desktop:bg-green-400 m-10 "> Hey you  </button>

ipo intha mari 3 button iruku nu vachupom... ovoru time um ithuku class ivlo perusa yeluthitu irukathuku bathila oru component la store atha mattum class panikalam.. 

    @layer components {
        .click-btn {
             @apply bg-pink-300 text-black border-2 p-4 rounded-lg tablet:bg-blue-500 laptop:bg-yellow-200 desktop:bg-green-400 m-10
        }
    }
intha mari app.css kuduthutenaa.. next time class la "click-btn" ndratha mattum call pannikalam.. 

        <button class="click-btn"> Hey Hello </button>
        <button class="click-btn"> Welcome  </button>
        <button class="click-btn"> Hey you  </button>
just like this .... 

# landing page Project setup

create new blade file blog.blade.php 

# Nav bar
<div class="container"> 
container nu div la kudukum bothu athu oru kuripitta width ah container kaga yeduhtukum .. 

mx-auto -> itha kuduthom naa center ku vanthudum container left and right side oru space irukum .. entha screen la pathalum content center la irukum.. 

flex space-x-6  ithula space enna pannum naaa.. x axis direction la flex ku space kudukum.. 

- # Hero Section

text-center -> text laam center ah vanthudum... 
w-1/3 => width ah 3 ah consider panna athula 1/3 .. 

# pricing section
