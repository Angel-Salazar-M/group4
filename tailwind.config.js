/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        backgroundImage: {
            'register': "url('/public/img/chivo.png')",
            'footer-texture': "url('/img/footer-texture.png')",
            'fondo': "url('/public/img/logo.png')",

          },

      },
    },
    plugins: [],
  }
