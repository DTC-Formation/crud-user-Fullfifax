/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      fontFamily: {
        impact: ['Impact', 'fantasy'],
      },
    },
    colors: {
      darkBlue: '#132b6c',
      white: '#ffffff',
      orange: '#e57c23',
    },
  },
  plugins: [],
}

