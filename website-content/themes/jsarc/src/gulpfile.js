'use strict';

const gulp = require('gulp');
const size = require('gulp-size');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const csscomb = require('gulp-csscomb');
const gulpStylelint = require('gulp-stylelint');
const rename = require('gulp-rename');
const server = require('browser-sync').create();

const config = {
  src: {
    sass: './sass/**/*.scss',
    js: './js/app.js',
    php: '../**/*.php'
  },
  dist: {
    cssFolder: '../',
    js: '../js/app.js'  
  }
}

/**
 * Compile SCSS into CSS & auto-inject css 
 * into browsers if browserSync is running.
 * This task also runs autoprefixer 
 * and CSS comb before outputting style.css
*/
function sassCompile() {
  return gulp.src(config.src.sass)
    .pipe(sass())
    .pipe(postcss([autoprefixer() ]))
    .pipe(csscomb())
    .pipe(rename('style.css'))
    .pipe(size())
    .pipe(gulp.dest(config.dist.cssFolder))
    .pipe(server.stream())
};

/**
 * Lint SASS
 */
function sassLint() {
  return gulp
    .src(config.src.sass)
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ]
    }))
};

/**
 * Lint CSS
 */
function cssLint() {
  return gulp
    .src(config.dist.css)
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ]
    }))
}

/**
 * Watches front end assets sass/js for changes, compiles & reload on change
 * Also watches wordpress php files, reloads browser on change
 */
function watch() {
  // If change detected to sass, recompile and auto inject updated css
  gulp.watch(config.src.sass, gulp.series(sassCompile));

  // If change detected to php pages, trigger browser reload
  gulp.watch(config.src.php).on('change', browserSyncReload);
}

/**
 * Intialise browserSync to enable live reloading in browser
 */
function liveReloadServer(done) {
  server.init({
    proxy: {
      target: "http://localhost"
    },
    open: "local",  // open localhost in browser on start
    reloadDebounce: 1000
  });
  done();
};

/**
 * Trigger browser reload
 */
function browserSyncReload(done) {
  server.reload();
  done();
}


/**
 * Local dev server task - compile and watch scss/php files for changes
 * This task assumes that the WP docker container is already running on localhost:80
 */
const dev = gulp.series(sassCompile, gulp.parallel(watch, liveReloadServer));

/**
 * Simple static server - watches for changes to SASS & html prototypes in src/examples folder
 */
// const staticPrototypes = 


// function serve-html-prototypes() {
//  gulp.series(['sass'], function() {
    // const server = browserSync.create()
//    server.init({
//     server: {
//       baseDir: '../',
//       directory: true,
//     },
//     port: 8082, // the port for local server (eg: http://localhost:8082)
//     ui: {
//       port: 8081 // the port for browsersync ui
//     },
//     reloadDebounce: 1000,
//   });

//   gulp.watch('./sass/**/*.scss', gulp.parallel(['sass']));
//   gulp.watch('../**/*.html').on('change', browserSync.reload);
// }));

/*
 * Export selected functions so they can be run individually as gulp tasks
 */
gulp.task("sassCompile", sassCompile);
gulp.task("sassLint", sassLint);
gulp.task("cssLint", cssLint);
gulp.task("watch", watch);
gulp.task("liveReloadServer", liveReloadServer);



/**
 * Default gulp task for local development
 * To run just type 'gulp' in terminal inside the same folder as this gulpfile
 */
gulp.task('default', dev);