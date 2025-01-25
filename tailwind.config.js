import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'pure-red': '#f44747',
                'rj-orange': '#e64a19'
            },
            fontWeight: {
                'rjbold' : 500
            },
            fontFamily: {
                lora: ['"Lora", serif'] ,
            },
            screens: {
                'tablet': '640px',
                'laptop': '1024px',
                'desktop': '1280px',
            }
        },
    },
    plugins: [],
};
