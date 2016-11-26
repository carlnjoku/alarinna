var gulp = require('gulp');

var assetsDev = 'assets/';
var assetsProd = 'src/';

var appDev = 'dev/';
var appProd = 'app/';

/* Mixed */
var ext_replace = require('gulp-ext-replace');

/* CSS */
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');
var precss = require('precss');
var cssnano = require('cssnano');
var concat = require('gulp-concat');
var minify = require('gulp-minify');

/* JS & TS */
var jsuglify = require('gulp-uglify');
var typescript = require('gulp-typescript');

/* Images */
var imagemin = require('gulp-imagemin');

var tsProject = typescript.createProject('tsconfig.json');

gulp.task('build-css', function () {
       gulp.src(assetsDev + 'css/*.css')
        //.pipe(sourcemaps.init())
        //.pipe(postcss([precss, autoprefixer, cssnano]))
        //.pipe(sourcemaps.write())
        .pipe(concat('app.min.css'))
        .pipe(minify())
        //.pipe(ext_replace('.min.css'))
        .pipe(gulp.dest(assetsProd + 'css/'));
});

gulp.task('build-js', function() {
        gulp.src(assetsDev + 'js/*.js')
        .pipe(concat('app.min.js'))
        .pipe(jsuglify())
        .pipe(gulp.dest(assetsProd + 'js/'));
})

gulp.task('build-img', function () {
    return gulp.src(assetsDev + 'img/**/*')
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest(assetsProd + 'img/'));
});

gulp.task('build-html', function () {
    return gulp.src(appDev + '**/*.html')
        .pipe(gulp.dest(appProd));
});

gulp.task('watch', function () {
    gulp.watch(appDev + '**/*.ts', ['build-ts']);
    gulp.watch(assetsDev + 'css/**/*.css', ['build-css']);
    gulp.watch(assetsDev + 'js/**/*.js', ['build-js']);
    gulp.watch(assetsDev + 'img/*', ['build-img']);
});

gulp.task('default', ['watch', 'build-ts', 'build-css', 'build-js']);