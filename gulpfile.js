'use strict';

var rootDir = 'wp-app/wp-content/themes/nacalezycie';

var browserSyncWatchFiles = [
    rootDir + '/assets/css/*.css',
    rootDir + '/assets/js/*.js',
    rootDir + '/**/*.php'
];
var browserSyncOptions = {
    proxy: {
        target: "http://localhost",
    },
    notify: true
};


var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');

gulp.task('browser-sync', function() {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});

gulp.task('sass', function() {
    // Includes
    gulp.src(rootDir + '/inc/scss/includes.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write({ includeContent: false }))
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write({ sourceRoot: '../../src/scss' }))
        .pipe(gulp.dest(rootDir + '/assets/css/'));

    // Styles
    gulp.src(rootDir + '/src/scss/assets.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write({ includeContent: false }))
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write({ sourceRoot: '../../src/scss' }))
        .pipe(gulp.dest(rootDir + '/assets/css/'));
});

gulp.task('scripts', function() {
    // Includes
    gulp.src([rootDir + '/inc/js/**/*.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('includes.js'))
        .pipe(sourcemaps.write({ sourceRoot: '../../src/js' }))
        .pipe(gulp.dest(rootDir + '/assets/js/'));

    // Assets
    gulp.src([rootDir + '/src/js/**/*.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('assets.js'))
        .pipe(sourcemaps.write({ sourceRoot: '../../src/js' }))
        .pipe(gulp.dest(rootDir + '/assets/js/'));
});

gulp.task('watch', ['sass', 'scripts', 'browser-sync'], function() {
    gulp.watch(rootDir + '/src/scss/**/*.scss', ['sass']);
    gulp.watch(rootDir + '/src/js/**/*.js', ['scripts']);
});

// optimized assets for prod
gulp.task('sassprod', function() {
    
    // Includes
    gulp.src(rootDir + '/inc/scss/includes.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest(rootDir + '/assets/css/'));
    
    // Assets
    gulp.src(rootDir + '/src/scss/assets.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest(rootDir + '/assets/css/'));
});

gulp.task('scriptsprod', function() {
    
    // Includes
    gulp.src([rootDir + '/inc/js/**/*.js'])
        .pipe(concat('includes.js'))
        .pipe(gulp.dest(rootDir + '/assets/js/'));
    
    // Assets
    gulp.src([rootDir + '/src/js/**/*.js'])
        .pipe(concat('assets.js'))
        .pipe(uglify())
        .pipe(gulp.dest(rootDir + '/assets/js/'));
});

gulp.task('prod', ['sassprod', 'scriptsprod']);