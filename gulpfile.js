// Dependencies
var gulp = require( 'gulp' );
var gulpCssNano = require( 'gulp-cssnano' );
var gulpRename = require( 'gulp-rename' );
var sass = require( 'gulp-sass' );

// sass task
gulp.task( 'sass', function()
{
    return gulp.src( './assets/sass/**/*.scss' )
        .pipe( sass() )
        .pipe( gulp.dest( './assets/css/' ) )
    ;
});


gulp.task( 'watch', function()
{
    gulp.watch( './assets/sass/**/*.scss', ['sass'] );
});

// css Task
gulp.task( 'css', function()
{
    return gulp.src( './assets/css/**/*.css' )
        .pipe( gulpCssNano() )
        .pipe( gulpRename( 'style.min.css' ) )
        .pipe( gulp.dest( './assets/css/' ) )
    ;
});