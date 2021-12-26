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
            colors: {
                grass: '#49af39',
                red: '#e50216',
                // primary: '#4168BB',
                // 'primary-50': '#455575',
                // 'primary-100': '#567BCA',
                // secondary: '#FFC046',
                // 'secondary-50': '#9F8757',
                // 'secondary-100': '#FFC75B',
                // teal: colors.teal,
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        // require('@tailwindcss/typography'),
    ],
}
