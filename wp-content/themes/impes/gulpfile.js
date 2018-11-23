var gulp = require('gulp');
var webserver = require('gulp-webserver');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');



// Config Sass

gulp.task('sass', function () {
  return gulp.src('./css/styles.scss')
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(cssmin())
    //.pipe(sass().on('error', sass.logError))
    //Destino
    .pipe(gulp.dest('./css/'));
});





// wacth

gulp.task('watch', function() {
  gulp.watch('./css/*.scss', ['sass']);

})

// tareas default
gulp.task('default', ['sass','watch']);
