const tailwindcss = require("tailwindcss");
const autoprefixer = require("autoprefixer");
const purgecss = require("@fullhuman/postcss-purgecss");

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
  }
}

module.exports = {
  plugins: [
    tailwindcss("./tailwind.js"),
    purgecss({
      content: [
        "./public/**/*.html",
        "./src/**/*.vue"
      ],
      extractors: [{
        extractor: TailwindExtractor,
        extensions: ['vue', 'html']
      }]
    }),
    autoprefixer({
      add: true,
      grid: true
    })
  ]
};
