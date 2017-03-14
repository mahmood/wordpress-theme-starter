var gulp = require('gulp');
var webpack = require('webpack-stream');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');


// Webpack task
gulp.task('webpack', function () {
	return gulp.src('./js/main.js')
		.pipe(webpack(require('./webpack.config.js')))
		.pipe(uglify())
		.pipe(gulp.dest('./'));
});

// Sass task
gulp.task('styles', function () {
	return gulp.src('./sass/style.scss')
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(autoprefixer('last 2 version', 'ie 10'))
		.pipe(gulp.dest('./'))
});

// Watch task
gulp.task('watch', function () {
	gulp.watch(['./js/**/*.js'], ['webpack', 'lintjs']);
	gulp.watch(['./css/**/*.scss'], ['styles', 'lintsass']);
	return;
});

// Default task
gulp.task('default', [
	'webpack',
	'styles',
	'watch'
]);