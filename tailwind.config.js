/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

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
          fontFamily: {
            'nunito': ['"Nunito Sans"',  ...defaultTheme.fontFamily.sans],

          },
colors: {
    'scriptazul': '#6DB5FE',
    'scriptverde': '#64BEB6',
    'scriptmorado': '#B394BD',

}

      },
    },
    plugins: [],
  }
