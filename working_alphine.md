# Alpine JS
Alpine.js is a lightweight JavaScript framework designed for adding simple interactivity to web pages, especially in applications built with Laravel, Livewire, and Tailwind CSS. It provides reactive and declarative behavior using a minimal syntax, similar to Vue.js but without the need for a full build step.

# When to Use Alpine.js
- When you need simple interactivity (like toggling elements, modals, dropdowns).
- When using Laravel Livewire, since Alpine.js can handle minor UI interactions without requiring a full frontend framework.
- When building a project with Tailwind CSS for rapid styling and development.

# Example Usage

## Here's a simple example of Alpine.js in action:

```html

<div x-data="{ open: false }">
    <button @click="open = !open">Toggle</button>
    <p x-show="open">Hello, Alpine.js!</p>
</div>
```

# Getting Started with JavaScript
  Learn some JavaScript basics before diving into Alpine.js.

## Learn Basic JavaScript Concepts

### Variables: Store Data
```js
let name = "Aaran";
const age = 10;
```

### Data Types: Strings, Numbers, Booleans, Arrays, Objects
```js
let isStudent = true;
let colors = ["red", "blue", "green"];
let user = { name: "John", age: 25 };
```

### Functions: Code That Runs When Called
```js
function greet() {
    return "Hello, world!";
}
```

### Events: Actions Like Clicks, Keypresses, etc.
```js
document.querySelector("button").addEventListener("click", function() {
    alert("Button Clicked!");
});
```

## Practice JavaScript in the Browser Console
Open the browser, right-click → Inspect → Console. Try typing:
```js
console.log("Hello, JavaScript!");
```

## Understand How JavaScript Works with HTML
Example: A button that shows a message when clicked.
```html
<button onclick="alert('Hello!')">Click Me</button>
```

## Start Learning Alpine.js with Simple Examples
Once you're comfortable with basic JavaScript, you can try something like this:
```html
<div x-data="{ count: 0 }">
    <button @click="count++">Click me</button>
    <p>You clicked {{ count }} times</p>
</div>
```

# 1 Installation 

We can use Cdn in Header file or 

```bash
npm install alpinejs
```
then add this into app.js 

```
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start();
```

# 2 Data 

## x-data

Everything in Alpine starts with the `x-data` directive.

x-data defines a chunk of HTML as an Alpine component and provides the reactive data for that component to reference

Imagine you have a light bulb in your room, and you want to turn it on and off with a button. We can use `x-data` to remember whether the light is on or off.

### Example Code:

```html
<div x-data="{ isOn: false }">
  <button x-on:click="isOn = !isOn">Toggle Light</button>
  <p x-text="isOn ? 'The light is on' : 'The light is off'"></p>
</div>
```
## Explanation:
- x-data="{ isOn: false }" starts by saying the light is off (isOn: false).
- When you click the button, x-on:click="isOn = !isOn" flips the state of the light. If it's on, it turns off; if it's off, it turns on.
- The paragraph `<p>` changes the text based on whether isOn is true or false: it shows "The light is on" or "The light is off."

### Example 2
```html
<div x-data="{name: 'Steve Rogers'}" class="bg-green-400 p-4 m-4 rounded">
    <span x-text="name"></span>
</div>
```
![Example 2](public/images/example1.png)

We can see the output.. 

Ithula Namma Enna Pannirukom naa, name ah x-data la key-value pair ah store panni athoda key ya x-text la kuduthu get pannirukom.. 

### Example 3
Ipo athuku keelaiye innoru vera div la antha key ah use panni value get panna mudiyuma nu try pannuvom..
```html
<div x-data="{name: 'Steve Rogers'}" class="bg-green-400 p-4 m-4 rounded">
    <span x-text="name"></span>
</div>

<!--div2-->
<div class="bg-slate-200 m-4 p-4 rounded">
    <span x-text="name"></span>
</div>
```
![Example 3](public/images/example2.png)
value va get panna mudila becoz.. `x-data` value va antha div kulla mattum than use panna mudiyum key-value pair ah use panni.. antha div ku veliya use panna mudiyathu..

### Example 4
```html
<div x-data="{name: 'Steve Rogers'}">
    
    <div class="bg-green-400 p-4 m-4 rounded">
        <span x-text="name"></span>
    </div>

    <div class="bg-slate-200 m-4 p-4 rounded">
        <span x-text="name"></span>
    </div>
    
</div>
```
intha mari oru Main div la pottu athuku , intha rendu div um kuduthaa.. Ipo rendukum name get Aagum..
![Example 4](public/images/example3.png)

# 3
## x-bind
x-bind is used to dynamically bind HTML attributes to data in Alpine.js.

## Example: Light Bulb ON/OFF

```html
<div x-data="{ isOn: false }">
    <button x-bind:class="isOn ? 'bg-yellow-500' : 'bg-gray-500'"
            x-on:click="isOn = !isOn">
        Click to Toggle Light
    </button>
</div>
```

## How This Works:
1️⃣ We start with `isOn: false` (the light is OFF).  
2️⃣ `x-bind:class="isOn ? 'bg-yellow-500' : 'bg-gray-500'"` changes the button’s color:  
   - If `isOn` is `true`, the button turns **yellow** (light is ON).  
   - If `isOn` is `false`, the button is **gray** (light is OFF).  
3️⃣ `x-on:click="isOn = !isOn"` flips `isOn` every time you click (turning the light on/off).  

## 🔥 What Happens When You Click?
- 💡 **First click** → Light turns ON (Yellow Button)  
- 💡 **Second click** → Light turns OFF (Gray Button)  
- 💡 **Third click** → Light turns ON again!  

It's just like flipping a real light switch! 🎉

### Why use x-bind?
It allows you to dynamically update attributes like src, class, disabled, etc., based on data changes.

## Example 2

```html
<div x-data="{
    selectedImageUrl: 'https://images.unsplash.com/photo-1737994872505-385ecc9a06e7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    show: false,
    inputValue: 'Hello'
}">
    <img class="w-96 h-96" :class="{'hidden': !show }"  x-bind:src="selectedImageUrl" alt="">
    <input type="text" :value="inputValue" :style="{color: 'red'}">
</div>
```
Note: We can use x-bind shorthand `:` instead of using `x-bind` both are doing same job.. 
