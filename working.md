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

    
