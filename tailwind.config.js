import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            height:{
                'carousel' : '625px',
            },
            width:{
                'description': '1000px',
                'contact': '580px',
                'fname' : '550px',
            },
            padding:{
                '6px': '6px',
                '30px' : '30px',
            },
        },
    },

    plugins: [
        require('flowbite/plugin')
    ],
};
