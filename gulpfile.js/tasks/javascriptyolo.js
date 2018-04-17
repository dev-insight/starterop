// including plugins
var gulp = require('gulp');
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");

// task
var javascriptyoloTask =  function () {
    return gulp.src([
      'src/js/jquery.royalslider.min.js',
      'src/js/wow.min.js',
      'src/js/app.js'
    ]) // path to your files
    .pipe(concat('app.js'))
    .pipe(gulp.dest('public/'));
}

gulp.task('javascriptyolo', javascriptyoloTask);

module.exports = javascriptyoloTask
