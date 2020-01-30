// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    order = require('gulp-order'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    clean = require('gulp-clean'),
    cache = require('gulp-cache')

// Styles
gulp.task('styles', function() {
    return gulp.src('scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({browsers: ['last 3 versions']}))
        .pipe(cleanCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest('assets'));
});

// Scripts
gulp.task('scripts', function() {
    return gulp.src('js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(order(['js/jquery.min.js', 'js/libs/**/*.js', 'js/functions.js'], {base: './'}))
        .pipe(concat('main.min.js'))
        // .pipe(uglify())
        // .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest('assets'));
});

// Images compression
gulp.task('images', function() {
    return gulp.src('images/**/*')
        .pipe(cache(imagemin({
            optimizationLevel: 5,
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('images'));
});

// Clean
gulp.task('clean', function() {
    return gulp.src(['assets'], {read: false})
        .pipe(clean());
});

// Clear cache
gulp.task('clear', function () {
    return cache.clearAll();
})

// Watch
gulp.task('watch', function() {
    gulp.watch(['scss/**/*'], ['styles']);
    gulp.watch(['js/**/*'], ['scripts']);
    gulp.watch(['images/**/*'], ['images']);
});

// Default task
gulp.task('default', ['clean'], function() {
    gulp.run('styles', 'scripts', 'images');
});