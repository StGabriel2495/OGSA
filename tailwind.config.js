import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.tsx',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Cabin', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        emerald: colors.emerald,
        indigo: colors.indigo,
        red: colors.red,
        yellow: colors.yellow,
        orange: {
          50: '#fffdf7',
          100: '#fffaf0',
          200: '#fcefd7',
          300: '#fae3be',
          400: '#f7c78f',
          500: '#f4a261',
          600: '#db8c4f',
          700: '#b86a37',
          800: '#944d23',
          900: '#6e3214',
          950: '#471a09',
        },
        blue: {
          50: '#f0f5f7',
          100: '#e4ecf0',
          200: '#b8cad6',
          300: '#93aabd',
          400: '#57708c',
          500: '#283a58',
          600: '#213252',
          700: '#172442',
          800: '#0e1a36',
          900: '#081129',
          950: '#03081a',
        },
      },
    },
  },

  plugins: [forms, typography],
};
