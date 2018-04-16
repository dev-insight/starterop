var config  = require('../config')
var gulp    = require('gulp')
var open    = require('open')
var os      = require('os')
var package = require('../../package.json')
var path    = require('path')
var gutil = require( 'gulp-util' );
var ftp = require( 'vinyl-ftp' );

var deployTask = function () {

  var conn = ftp.create( {
    host:     config.tasks.deploy.ftpHost,
    user:     config.tasks.deploy.ftpUser,
    password: config.tasks.deploy.ftpPassword,
    parallel: 10,
    log:      gutil.log
  } );

  var globs = [
    config.root.dest + '/**'
  ];


  return gulp.src( globs, { base: '.', buffer: false } )
      .pipe( conn.newer( config.tasks.deploy.ftpDistFolder ) ) // only upload newer files
      .pipe( conn.dest( config.tasks.deploy.ftpDistFolder ) );

};

gulp.task('deploy', ['production'], deployTask)
module.exports = deployTask
