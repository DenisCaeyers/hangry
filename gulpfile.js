// Global Packages
var gulp = require('gulp');

// Stylesheet Packages
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');


// Stylesheet Tasks
gulp.task('sass-dev', function () {
  return gulp.src([
      'wp-content/themes/HangryV1/scss/*.scss',
    ])
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('wp-content/themes/HangryV1/'));
});

// -- Post CSS Task
gulp.task('postcss-dev', ['sass-dev'], function () {
  var processors = [
    autoprefixer({
      browsers: ['last 5 versions'],
      cascade: false
    }),
  ];
  return gulp.src('wp-content/themes/HangryV1/*.css')
    .pipe(postcss(processors))
    .pipe(gulp.dest('wp-content/themes/HangryV1/'))
});

// Watch Tasks
gulp.task('watch', function () {
    gulp.watch('wp-content/themes/HangryV1/scss/*.scss', ['postcss-dev']);
});

// Watch, development, production and deployment Tasks
gulp.task('default',['watch']);