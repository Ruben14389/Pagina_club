/** @type {import('tailwindcss').Config} */
export default {
  content: [
    //"./resources/views/layouts/app.blade.php" para aplicar tailwind a todas las vistas aplicamos el codigo de abajo
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

