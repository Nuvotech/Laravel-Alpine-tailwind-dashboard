const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                nuni: ["Nunito"],
                popin: ["Poppins"],
            },
            colors: {
                "theme-gray": "#2A3042",
                "body-gray": "#F8F8FB",
            },
            fontSize: {
                s: "13px",
                xxs: "10px",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
