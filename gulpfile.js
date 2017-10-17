// Dependencies
var gulp = require( 'gulp' );
var gulp_css_nano = require( 'gulp-cssnano' );
var gulp_rename = require( 'gulp-rename' );

// Css Task
gulp.task( 'css', function()
{
    return gulp.src( './assets/' );
})