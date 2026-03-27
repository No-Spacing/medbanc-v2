/** @type {import('tailwindcss').Config} */
import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
          montserrat: ['Montserrat', 'sans-serif'],
      },
      colors: {
          "Color-Logo-Green": "#8CC540", // Add your custom color here
          "AColor-Logo-Green": "#598F13",
          "BColor-Logo-Green": "#92bb5c", // Add your custom color here
          "Color-Logo-Grey": "#414042",
          "Color-Logo-DGrey": "#212121",
          "Color-Logo-MDGrey": "#191919",
          "Lighter-Green": "#54C540 ",
          "Medium-Sea-Green": "#229b4a",
      },
      maxWidth: {
          '8xl': '90rem', // 1440px
          '9xl': '100rem', // 1440px
      },
      width: {
          '150': '37.5rem', // Custom width for w-150 (600px)
      },
      animation: {
          'fade-in': 'fadeIn 1s ease-out',
          'gradient-x': 'gradient-x 5s ease infinite', // Add the new animation
      },
      keyframes: {
          fadeIn: {
              '0%': { opacity: 0 },
              '100%': { opacity: 1 },
          },
          'gradient-x': { // Add the new keyframes
              '0%, 100%': { backgroundPosition: '0% 50%' },
              '50%': { backgroundPosition: '100% 50%' },
          },
      },
    },
  },
  plugins: [],
}

