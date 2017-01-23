//Utilities
var gulp 				= require('gulp');
var gutil 			= require('gulp-util');
var plumber 		= require('gulp-plumber');

//Scripting
var uglify 			= require('gulp-uglify');
var concat 			= require('gulp-concat');

//Styling
var less 					= require('gulp-less');
var sourceMap 		= require('gulp-sourcemaps');
var autoprefixer  = require('gulp-autoprefixer');

var cssnano 			= require('gulp-cssnano');


//theme path
var themeName = 'Rebirth';
var themePath = 'wp-content/themes/' + themeName + '/assets/';

var browserSync = require('browser-sync').create();

// Static server
gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: "localhost:8888"
  });
});


//On Error
var onError = function (err) {
	gutil.beep();
	console.log(err.toString());
	this.emit('end');
};


//Compile and concat framework and custom scripts into one file
gulp.task('scripts', function() {
	return gulp.src([

		//Libraries
		'node_modules/jquery/dist/jquery.js',
		'node_modules/modernizr/src/Modernizr.js',

		//Framework
		'node_modules/bootstrap/dist/js/bootstrap.js',

		//Site/Theme
		themePath + 'assets/js/*.js'
	])
	.pipe(plumber({
		errorHandler: onError
	}))
	.pipe(concat('theme.js'))
	.pipe(uglify())
	.pipe(gulp.dest( themePath + 'js/min'))
	.pipe(browserSync.stream())
	.on('error', gutil.log);
});


//Compile all less files into main less file and output minified css
gulp.task('less', function() {
	return gulp.src(
		themePath + 'less/theme.less'
	)
	.pipe(plumber({
		errorHandler: onError
	}))
	.pipe(sourceMap.init())
	.pipe(less({
		paths: [
			'node_modules/bootstrap/less/bootstrap.less',
			'node_modules/font-awesome/less/font-awesome.less'
		],
		compress: true
	}))
	.pipe(autoprefixer())
	.pipe(sourceMap.write('maps/'))
	.pipe(gulp.dest( themePath + 'less/_compiled' ))
	.pipe(browserSync.stream())
	.on('error', gutil.log);
});

//Copy fonts
gulp.task('fonts', function() {
	return gulp.src(
		'node_modules/font-awesome/fonts/**'
	)
	.pipe(gulp.dest( themePath + 'fonts/'));
});


// Watch Files For Changes
gulp.task('watch', function() {
	gulp.watch( themePath + 'less/partials/*.less', ['less', 'browser-sync'] );
	gulp.watch( themePath + 'less/*.less', ['less'] );
	gulp.watch( themePath + 'js/*.js', ['scripts'] );
  gulp.watch( themePath + 'js/global/*.js', ['scripts'] );
});

//Start work with project using the default "gulp" command
gulp.task('default', ['fonts', 'browser-sync', 'scripts', 'less', 'watch']);



