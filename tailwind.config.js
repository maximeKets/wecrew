const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        backgroundImage: {
          //  'form-bg': "url('/storage/app/public/Clouds.svg')",

        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: '#000',
            white: '#fff',
            gray: {
                50: '#f9fafb',
                100: '#f4f5f7',
                200: '#e5e7eb',
                300: '#d2d6dc',
                400: '#9fa6b2',
                500: '#6b7280',
                600: '#4b5563',
                700: '#374151',
                800: '#252f3f',
                900: '#161e2e',
            },
            'yellow': '#CCD661',
            'indigo': '#399DAD',
            'red': '#D53E53',
            'orange': '#E3754B',
            'yellow-2': '#EFC989',
            'next': '#999B9D',
            'ok': '#CCD661',
            'delete': '#D53E53',
            'blue': '#0B2F46',
            'background': '#efeee9',
        },
        extend: {
            fontFamily: {
                body: ['Trade Gothic Next LT Pro', ...defaultTheme.fontFamily.sans],
                title: ['dazzle-unicase', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
