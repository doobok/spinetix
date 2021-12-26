const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            animation: {
                // 'pulse-once': 'pulse 0.1s ease-in-out 1',
            },
            inset: {
                '100': '100%',
            },

            padding: {
                '120': '120px',
            },

            colors: {
                'theme-color': '#337ab7',
                'theme-color-2': '#0f0'
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        // require('@tailwindcss/typography'),
    ],
}
