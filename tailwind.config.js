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
                "main": "#e72578",
                "main-altern": "#ffc400",
                "acent": "#ffc400",
                "secondary": "#DC9A46",
                "main-light": "#f5f5f5",
                "secondary-light": "#F6F9FB",
                "dark-text": "#747474",
                "dark": "#222425",
                "dark-medium": "#414141",
                "main-dark": "#212529",
                "gray": "#A1A1A1",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
