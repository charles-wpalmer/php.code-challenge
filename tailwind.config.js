/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ["bumblebee"],
  },
  plugins: [
    require("@tailwindcss/typography"),
    require('daisyui'),
  ],
}

