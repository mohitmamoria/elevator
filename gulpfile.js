var gulp = require('gulp'),
	rimraf = require('gulp-rimraf'),
	rename = require('gulp-rename'),
	replace = require('gulp-replace'),
	htmlreplace = require('gulp-html-replace'),
	stripdebug = require('gulp-strip-debug'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	concat = require('gulp-concat'),
	cssmin = require('gulp-minify-css');

gulp.task('clean', function() {
	return gulp.src('public/assets', {read: false}).pipe(rimraf());
});

gulp.task('styles', ['clean'], function() {
	return gulp.src([
			'app/assets/styles/app.css',
			'app/assets/styles/main.css',
		])
		.pipe(concat('all.css'))
		.pipe(cssmin())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('public/assets/styles'));
});

gulp.task('images', ['clean'], function() {
	return gulp.src('app/assets/images/**/*')
		.pipe(gulp.dest('public/assets/images'));
});

gulp.task('scripts', ['clean'], function() {
	return gulp.src([
			'app/assets/scripts/vendors/**/*.js',
			'app/assets/scripts/main.js',
		])
		.pipe(concat('all.js'))
		.pipe(stripdebug())
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('public/assets/scripts'));
});

gulp.task('default', ['scripts', 'styles', 'images'], function() {
	console.log('All done, master!');
});

gulp.task('watch', function () {
    gulp.watch('app/assets/**/*', ['default']);
});