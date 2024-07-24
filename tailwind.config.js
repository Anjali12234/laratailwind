/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './path/to/your/files/**/*.{html,js,jsx,ts,tsx,vue}',
  ],
  theme: {
    extend: {
        backgroundImage: {
            'custom-image': "url('/assets/frontend/background-image.png')",
          },
          screens: {
            'sm': '576px',
            // => @media (min-width: 576px) { ... }

            'md': '960px',
            // => @media (min-width: 960px) { ... }

            'lg': '1440px',
            // => @media (min-width: 1440px) { ... }
          },
    },
  },
  plugins: [],
}

