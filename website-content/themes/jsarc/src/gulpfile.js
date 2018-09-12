'use strict';
const gulp = require('gulp');
const size = require('gulp-size');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const csscomb = require('gulp-csscomb');
const gulpStylelint = require('gulp-stylelint');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();
const browserSync2 = require('browser-sync').create();

const PATHS = {
  src: {
    sass: './sass/**/*.scss',
    js: './js/app.js'
  },
  dist: {
    css: '../style.css',
    js: '../js/app.js'  
  }
}

/**
 * Compile SCSS into CSS & auto-inject css 
 * into browsers if browserSync is running.
 * This task also runs autoprefixer 
 * and CSS comb before outputting style.css
*/
gulp.task('sass', function() {
  return gulp.src(PATHS.src.sass)
    .pipe(sass())
    .pipe(postcss([autoprefixer() ]))
    .pipe(csscomb())
    .pipe(rename('style.css'))
    .pipe(size())
    .pipe(gulp.dest('../'))
    .pipe(browserSync.stream())
    .pipe(browserSync2.stream())
});

/**
 * Lint SASS
 */
gulp.task('sass:lint', function lintCssTask() {
  return gulp
    .src(PATHS.src.sass)
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ]
    }))
});

/**
 * Lint CSS
 */
gulp.task('css:lint', function lintCssTask() {
  return gulp
    .src(PATHS.dist.css)
    .pipe(gulpStylelint({
      fix: true,
      reporters: [
        {formatter: 'string', console: true}
      ]
    }))
});

/**
 * Local dev server task - compile and watch scss/php files for changes
 * This task assumes that the WP docker container is running on localhost:80
 */
gulp.task('dev', ['sass'], function() {
  browserSync.init({
    proxy: {
      target: "http://localhost"
    },
    open: "local",  // open localhost in browser on start
    reloadDebounce: 1000
  });

  // If change detected to sass, recompile and auto inject updated css
  gulp.watch('./sass/**/*.scss', ['sass']);

  // If change detected to php pages, trigger browser reload
  gulp.watch('../**/*.php').on('change', browserSync.reload);
});

/**
 * Simple static server - watches for changes to SASS & html prototypes in src/examples folder
 */
gulp.task('serve-html-prototypes', ['sass'], function() {
  browserSync2.init({
    server: {
      baseDir: '../',
      directory: true,
    },
    port: 8082, // the port for local server (eg: http://localhost:8082)
    ui: {
      port: 8081 // the port for browsersync ui
    },
    reloadDebounce: 1000,
  });

  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('../**/*.html').on('change', browserSync2.reload);
});

gulp.task('default', ['dev']);