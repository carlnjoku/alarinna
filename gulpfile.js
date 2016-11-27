var gulp = require('gulp');

var assetsDev = 'assets/';
var assetsProd = 'src/';

/* CSS */
// var postcss = require('gulp-postcss');
//var sourcemaps = require('gulp-sourcemaps');
//var autoprefixer = require('autoprefixer');
//var precss = require('precss');
//var cssnano = require('cssnano');
var concat = require('gulp-concat');
var minify = require('gulp-minify');
var rename = require('gulp-rename');
var uglifycss = require('gulp-uglifycss');

/* JS & TS */
var jsuglify = require('gulp-uglify');

/* Images */
var imagemin = require('gulp-imagemin');

gulp.task('build-css', function () {
       gulp.src(assetsDev + 'css/**/*.css')
        //.pipe(sourcemaps.init())
       .pipe(minify())
       .pipe(uglifycss({
            "maxLineLen": 80,
            "uglyComments": true
        }))
        .pipe(concat('main.min.css'))
        .pipe(gulp.dest(assetsProd + 'css/'));
});

gulp.task('build-js', function() {
        gulp.src(assetsDev + 'script/**/*.js')
        .pipe(concat('main.min.js'))
        .pipe(jsuglify())
        .pipe(gulp.dest(assetsProd + 'js/'));
});

gulp.task('build-img', function () {
    return gulp.src(assetsDev + 'img/**/*')
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest(assetsProd + 'img/'));
});

gulp.task('watch', function () {
    gulp.watch(assetsDev + 'css/**/*.css', ['build-css']);
    gulp.watch(assetsDev + 'js/**/*.js', ['build-js']);
    gulp.watch(assetsDev + 'img/*', ['build-img']);
});

gulp.task('default', ['watch', 'build-css', 'build-js']);

