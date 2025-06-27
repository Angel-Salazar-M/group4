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
    'azulnegro': '#465459',
    'celeste': '#A8BFB9',
    'piel': '#F2A88D',
    'cafe': '#BF7111',
    'rosa': '#F26363',

}

      },
    },
    plugins: [],
  }
