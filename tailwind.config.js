/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./assets/page/*.{html,js,php,css}"],
  theme: {
    extend: {},
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'] 
      },
      colors: {
        'white' : '#FFFFFF',
        'black' : '#000000',
        'primary' : '#9A9483',
        'quaternary' : '#E5DCC3'
      }
  },
  plugins: [],
}
