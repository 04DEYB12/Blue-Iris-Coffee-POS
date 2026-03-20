/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./dist/**/*.{html,js,php}",
    "./*.html",
    "./*.php",
    "./public/**/*.php",
    "./view/**/*.php",
    "./controller/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}