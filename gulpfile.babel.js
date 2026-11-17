"use strict";

import { src, dest, series  } from "gulp";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";
import uglify from "gulp-uglify";
import stripCSSComments from "gulp-strip-css-comments";

const paths = {
    css: [
      "./src/css/theme.css",
      "./src/css/fonts.css",
      "./src/css/animations.css",
      "./src/css/base.css",
      "./src/css/layout.css",
      "./src/css/state.css",
      "./src/css/module.css",
      "./src/css/buttons.css",
      "./src/css/khwurtz.css",
      // LIBS
      "./node_modules/@splidejs/splide/dist/css/splide.min.css",
      // CUSTOM
    ],
    css_editor: [
      "./src/css/theme.css",
      "./src/css/editor.css"
    ],
    scriptsHead: [
    ],
    scriptsFooter: [
      // LIBS
      "./node_modules/@splidejs/splide/dist/js/splide.min.js",
      "./src/js-footer/splide-init.js",
      "./node_modules/scrollreveal/dist/scrollreveal.min.js",
      "./src/js-footer/scrollreveal-init.js",
      // GLOBAL
      "./src/js-footer/nav-toggle.js",
      // THEME
      "./src/theme/hatting-time.js",
      "./src/theme/index-hero-popup.js",
      "./src/theme/scroll-down.js",
      "./src/theme/photos-slider.js",
      "./src/theme/workshop-sketch.js",
      "./src/theme/workshop-animations.js",
      "./src/theme/story-scroll.js",
      "./src/theme/store-locator.js"
    ]
  }
  
  const dirs = {
    dest: "./dist",
    css: "./dist/css",
    js: "./dist/js"
  }

  export const styles = () => src( paths.css, { allowEmpty: true, sourcemaps: true } )
    .pipe(concat("core.min.css"))
    .pipe(cleanCSS({ compatibility: "*"}))
    .pipe(dest(dirs.css, { sourcemaps: true }))

  export const styles_dev = () => src( paths.css, { allowEmpty: true, sourcemaps: true } )
    .pipe(concat("core.dev.css"))
    //.pipe(stripCSSComments())
    .pipe(dest(dirs.css, { sourcemaps: true }))

  export const styles_editor = () => src(paths.css_editor)
    .pipe(concat("editor-styles.css"))
    .pipe(cleanCSS({ compatibility: "*"}))
    .pipe(dest(dirs.css))

  export const jsHead = () => src(paths.scriptsHead, { allowEmpty: true })
    .pipe(concat("jsHead.min.js"))
    .pipe(uglify())
    .pipe(dest(dirs.dest))

  export const jsFooter = () => src(paths.scriptsFooter, { allowEmpty: true })
    .pipe(concat("scripts-footer.js"))
    .pipe(uglify())
    .pipe(dest(dirs.js))

  exports.default = series(styles, styles_dev, styles_editor, /*jsHead,*/ jsFooter);