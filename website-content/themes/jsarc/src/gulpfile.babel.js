import gulp from 'gulp';
import babel from 'gulp-babel';
import size from 'gulp-size';
import plumber from 'gulp-plumber';
import sass from 'gulp-sass';
import autoprefixer from 'autoprefixer';
import postcss from 'gulp-postcss';
import csscomb from 'gulp-csscomb';
import gulpStylelint from 'gulp-stylelint';
import rename from 'gulp-rename';
import browserSync from 'browser-sync';

const browserSyncServer = browserSync.create();

/**
 * Folder and file path config.
 * Make edits here to change source 
 * or destination folder paths
 * 
*/
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
    .pipe(plumber())
    .pipe(sass())
    .pipe(postcss([autoprefixer() ]))
    .pipe(csscomb())
    .pipe(rename('style.css'))
    .pipe(size())
    .pipe(gulp.dest(config.dist.cssFolder))
};

/**
 * Compile JS
 * TODO: Add more details
*/
function javascriptCompile() {
  return gulp.src(config.src.js, { sourcemaps: true })
    .pipe(babel())
    // .pipe(uglify())
    // .pipe(concat('index.min.js'))
    .pipe(gulp.dest(config.dist.js));
}

/**
 * Intialise browserSync server to enable live reloading in browser
 */
function liveReloadServer(done) {
  browserSyncServer.init({
    proxy: {
      target: 'http://localhost'
    },
    open: 'local',  // open localhost in browser on start
    reloadDebounce: 500
  });
  done();
}

/**
 * Trigger full browser reload
 */
function fullBrowserReload(done) {
  browserSyncServer.reload();
  done();
}

/**
 * Inject changes into page without full reload
 */
function streamReload(done) {
  browserSyncServer.reload({stream: true})
  done();
}

/**
 * Watches front end assets sass/js for changes, compiles & reload on change
 * Also watches wordpress php files, reloads browser on change
 */
const watch = () => {
  // If change detected to sass, recompile and auto inject updated css
  gulp.watch(config.src.sass, gulp.series(sassCompile, fullBrowserReload))
  
  // Watch JS for changes, recompile and trigger
  // gulp.watch(config.src.js, gulp.series(jsCompile, streamReload))

  // If change detected to php pages, trigger browser reload
  gulp.watch(config.src.php, fullBrowserReload)
};



export {
  sassCompile
}

/**
 * Local dev server task - compile and watch scss/php files for changes
 * This task has a dependancy that the WP docker container is already running 
 * on localhost:80 for the livereload task to function
 */
const dev = gulp.series(sassCompile, liveReloadServer, watch);
export default dev;
