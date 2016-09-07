var gulp = require('gulp');
var livereload = require('gulp-livereload');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var watch = require('gulp-watch');
var autoprefixer = require('autoprefixer');

gulp.task('sass', function() {
  return gulp.src('sass/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(postcss([require('postcss-flexbugs-fixes'), autoprefixer({ browsers: ['last 3 versions'] }) ]))
    .pipe(gulp.dest('stylesheets'))
    .pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('sass/**/*.scss', ['sass']);
});
