var gulp         = require('gulp');
var path         = require('path');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps   = require('gulp-sourcemaps');
var open         = require('gulp-open');

var Paths = {
  HERE                 : './',
  DIST                 : 'dist/',
  CSS                  : './assets/css/',
  SCSS_TOOLKIT_SOURCES : './assets/scss/material-dashboard.scss',
  SCSS                 : './assets/scss/**/**'
};

gulp.task('compile-scss', function () {
  return gulp.src(Paths.SCSS_TOOLKIT_SOURCES)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write(Paths.HERE))
    .pipe(gulp.dest(Paths.CSS));
});

gulp.task('watch', function () {
  gulp.watch(Paths.SCSS, ['compile-scss']);
});

gulp.task('open', function(){
  gulp.src('./examples/dashboard.html')
  .pipe(open());
});

gulp.task('open-app', ['open', 'watch']);




 <?php if ($user =="admin"): ?>
                <li class="nav-item ">
                    <a class="nav-link" href="room_management.php">
                        <i class="fa fa-bed"></i>
                        <p>Room management</p>
                    </a>
                </li>
                <?php else: ?>

               <?php endif ?>
