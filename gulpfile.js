const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const replace = require('gulp-string-replace');
const del = require('del');
const gap = require('gulp-append-prepend');

//usage gulp.src(paths.scripts)
const paths = {
  index: 'app/index.html',
  examples: ['app/eduQuery/**/*.{html,htm}', '!app/eduQuery/**/css/**/*.html'],
  eduquerySupportingFiles: ['app/eduQuery/**','!app/eduQuery/**/*.{html,htm}'],
  images: 'app/img/*.{jpg,png,gif}',
  js: 'app/js/**/*.js',
  scss: 'app/scss/*.scss',
  includes: 'app/inc/*.php',
  out: 'dist'
};

const phpAuthHeader = '<?php require "inc/auth.php"; ?>';

gulp.task('clean:dist', function() {
  return del.sync(['dist/**', '!dist']);
})

gulp.task('index', function(){
  return gulp.src(paths.index)
    .pipe(replace(/\.html/g, '.php'))
    .pipe(gap.prependText(phpAuthHeader))
    .pipe(rename({
      extname: '.php'
    }))
    .pipe(gulp.dest(paths.out));
});

gulp.task('examples', function(){
  return gulp.src(paths.examples, { base: 'app' })
    .pipe(gap.prependText(phpAuthHeader))
    .pipe(rename({
      extname: '.php'
    }))
    .pipe(gulp.dest(paths.out));
});

gulp.task('eduquery-supporting-files', function(){
  return gulp.src(paths.eduquerySupportingFiles, { base: 'app' })
    .pipe(gulp.dest(paths.out));
});

gulp.task('js', function() {
  return gulp.src([paths.js], { base: 'app' })
    .pipe(gulp.dest(paths.out));
});

gulp.task('sass', function() {
  return gulp.src(paths.scss)
    .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
      //.pipe(rename(path => (path.dirname = path.dirname.replace(/scss$/, 'css'), path)))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.out + '/css'));
});

gulp.task('sass-dev', function() {
  return gulp.src(paths.scss)
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest('app/css'));
});

// Copy all static images 
gulp.task('images', function() {
  return gulp.src(paths.images, { base: 'app' })
    // Pass in options to the task 
    //.pipe(imagemin({optimizationLevel: 5}))
    .pipe(gulp.dest(paths.out));
});

gulp.task('php-includes', function() {
  return gulp.src([paths.includes], { base: 'app' })
    .pipe(gulp.dest(paths.out));
});

// Rerun the task when a file changes 
gulp.task('watch', function() {
  gulp.watch(paths.scss, ['sass-dev']);
});

gulp.task('default', [ 'clean:dist', 'index', 'examples', 'eduquery-supporting-files', 'js', 'sass', 'images', 'php-includes' ]);