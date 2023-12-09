/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./**/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'footer': 'linear-gradient(180deg, #040200 0%, #040200AB 100%)',
        'navbar': 'linear-gradient(180deg, #04020080 0%, transparent 100%)',
      },
      colors: {
        'spider-black': '#040200',
        'charcoal': '#202020',
      }
    },
  },
  plugins: [],
}

