// TO-DO
// Gulp Sourcemap

require('es6-promise').polyfill();

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function() {
  return gulp.src('./sass/*.scss')
  .pipe(plumber({ errorHandler: onError }))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))
});

var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('watch', function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://localhost/WP/wordpress/bistronguyens/',
  });
  gulp.watch('./sass/*.scss', ['sass'], reload);
});

gulp.task('default', ['sass', 'watch']);


var plumber = require('gulp-plumber');
var gutil = require('gulp-util');

var onError = function(err) {
  console.log('An error occurred: ', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};
