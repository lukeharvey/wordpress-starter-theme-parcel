# Wordpress Starter Theme Gulp

A WordPress starter theme using Gulp.

Features:

- [sanitize.css](https://jonathantneal.github.io/sanitize.css/)
- [Gulp](https://gulpjs.com/) for asset optimisation and compilation
- [BrowserSync](https://www.browsersync.io/) for live browser reloading
- [Suit CSS](https://suitcss.github.io/) naming conventions
- [lazysizes](https://github.com/aFarkas/lazysizes) for lazyloading images

## Getting started

### Install pre-requisites

- [Node](https://nodejs.org/) `$ brew install node`
- [Gulp](https://gulpjs.com/) `$ npm install -g gulp`

### (Optional) Install linters globally

- [Prettier](https://prettier.io/) `$ npm install -g prettier`
- [ESLint](https://eslint.org/) `$ npm install -g eslint eslint-config-prettier`
- [stylelint](https://stylelint.io/) `$ npm install -g stylelint stylelint-config-suitcss`

### Setup

```
$ git clone https://github.com/lukeharvey/wordpress-starter-theme-gulp.git lh
$ cd lh
$ npm install
```

Then edit `gulpfile.js` to set the correct proxy URL for Browsersync.

## Developing 'lh'

```
# Asset compilation
$ gulp build

# Start live reload server with automatic asset compilation
$ gulp serve

# List other available gulp tasks
$ gulp help
```

# Author

### Luke Harvey

A web developer / web designer from the UK.

- <https://lukeharvey.co.uk>
