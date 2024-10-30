import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    400: "#6D4DFF",
                    500: "rgb(109,77,266,4%)"
                },
                navbar: {
                    bg: '#F8FAFF'
                },
                textSm : {
                    400 : "#666",
                }
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ["Inter", "sans-serif"],
                poppins : ["Poppins","sans-serif"]
            },
        },
        screens: {
            'sm': '480px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
        }
    },

    plugins: [forms],
};
