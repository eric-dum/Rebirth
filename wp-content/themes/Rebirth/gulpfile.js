//REQUIREMENTS

//Utilities
var gulp = require('gulp');
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');

//Scripting
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

//Styling
var less = require('gulp-less');
var sourceMap = require('gulp-sourcemaps');
var lesswatch = require('gulp-watch-less');
var autoprefixer = require('gulp-autoprefixer');

//Dev Tools
var browserSync = require('browser-sync').create();
var es = require('event-stream');

//On Error
var onError = function (err) {
  gutil.beep();
  console.log(err.toString());
  this.emit('end');
};



//PATH VARIABLES
var bootstrap = './node_modules/bootstrap/';
var fontAwesome = './node_modules/font-awesome/';
var jQuery = './node_modules/jquery/';

//THEME PATHS
var lessDest = './assets/less/_min/';
var jsDest = './assets/js/_min/';
//var themeName = 'Rebirth';
//var themePath = 'wp-content/themes/' + themeName + '/assets/';



// Static server
gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: "localhost:8888"
  });
});





// Reload all Browsers
gulp.task('bs-reload', function () {
  browserSync.reload();
});



//--------------------------------------------------------------
// LESS Main
//
// This task is for auto-created minified css files. Any less  
// files in the 'global' directory will automatically be minified
// and concatenated and have a 'theme.min.css' file created.
//--------------------------------------------------------------
gulp.task('less-main', function() {
  return gulp.src([
    //ADD VENDOR STYLESHEETS HERE
    bootstrap + 'less/bootstrap.less',
    fontAwesome + 'less/font-awesome.less',

    //MAIN GLOBAL STYLESHEET
    './assets/less/theme.less'
  ])
  .pipe(plumber({
    errorHandler: onError
  }))
  .pipe(sourceMap.init())
  .pipe(less( {compress : true} ))
  .pipe(autoprefixer('last 10 versions', 'ie 9'))
  .pipe(concat('theme.min.css'))
  .pipe(sourceMap.write('maps/'))
  .pipe(gulp.dest( lessDest ))
  .pipe(browserSync.stream())
  .on('error', gutil.log);
});






//COPY FONTS FOR FA
gulp.task('copy-fonts', function() {
  return gulp.src(fontAwesome + 'fonts/**')
  .pipe(gulp.dest('./assets/fonts/'));
});





//Compile and concat framework and custom scripts into one file
gulp.task('scripts', function() {
  return gulp.src([
    
    //ADD VENDOR JAVASCRIPT HERE
    jQuery + '/dist/jquery.js',
    bootstrap + '/dist/js/bootstrap.min.js',

    //ADDITIONAL VENDOR SCRIPTS NOT IN NPM PACKAGE
    './assets/js/vendor/*.js',

    './assets/js/theme.js'
  ])
  .pipe(plumber({
    errorHandler: onError
  }))
  .pipe(concat('theme.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest( jsDest ))
  .pipe(browserSync.stream())
  .on('error', gutil.log);
});










//Watch Task
//Watches less and js directories for change.
gulp.task('watch', function() {
  gulp.watch( ['*.php', 'template-parts/**/*.php'], ['bs-reload'] );
  gulp.watch( './assets/less/**/*.less', ['less-main'] );
  gulp.watch( './assets/js/*.js', ['scripts'] );
});






//Build Task
gulp.task('build', ['less-main', 'scripts']);

//Start work with project using the default "gulp" command
gulp.task('default', ['less-main', 'scripts', 'copy-fonts', 'browser-sync', 'watch']);




