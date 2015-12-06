
var gulp       = require('gulp');
var gutil      = require('gulp-util');
var concat     = require('gulp-concat');
var notify     = require('gulp-notify');
var sass       = require('gulp-ruby-sass');
var autoprefix = require('gulp-autoprefixer');
var minifyCSS  = require('gulp-minify-css');
var uglify     = require('gulp-uglify');
var exec       = require('child_process').exec;
var sys        = require('sys');

// Where do you store your Sass files?
var sassDir      = 'resources/assets/scss';
var targetCSSDir = 'public/assets/css';
var jsDir        = 'resources/assets/js';
var targetJsDir  = 'public/assets/js';
var pluginsDir   = 'public/assets/plugins';

// Css: Pack base plugins
gulp.task('css-plugins', function() {
    return gulp.src([pluginsDir + '/bootstrap/css/bootstrap.min.css'])
        .pipe(concat('plugins.css'))
        .pipe(gulp.dest(targetCSSDir))
});

// Js: Pack base plugins
gulp.task('js-plugins', function() {
    return gulp.src([
            pluginsDir + '/jquery/js/jquery.min.js',
            pluginsDir + '/bootstrap/js/bootstrap.min.js'
        ])
        .pipe(concat('plugins.js'))
        .pipe(gulp.dest(targetJsDir))
});
