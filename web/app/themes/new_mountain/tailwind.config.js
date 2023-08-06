/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      width: {
        'fit-content': 'fit-content',
      },
      fontFamily: {
        primary: "Futura"
      }
    },
  },
  plugins: [],
}

