const tailwindcss = require("tailwindcss");
const autoprefixer = require("autoprefixer");
const purgecss = require("@fullhuman/postcss-purgecss");
module.exports = {
  plugins: [
    tailwindcss("./tailwind.js"),
    purgecss({
      content: [
        "./public/**/*.html",
        "./src/**/*.vue"
      ]
    }),
    autoprefixer({
      add: true,
      grid: true
    })
  ]
};
