if(global.production) return

var browserSync       = require('browser-sync')
var gulp              = require('gulp')
var webpack           = require('webpack')
var webpackMultiConfig = require('../lib/webpack-multi-config')
var config            = require('../config')
var pathToUrl         = require('../lib/pathToUrl')

var browserSyncTask = function() {

  browserSync.init(config.tasks.browserSync)
}

gulp.task('browserSync', browserSyncTask)
module.exports = browserSyncTask
