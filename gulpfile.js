var
gulp = require('gulp'),
sass = require('gulp-sass'),
browserSync = require('browser-sync').create();

//convert scss to css
gulp.task('sass', function(){
  return gulp.src('app/scss/styles.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('app/css'))
});


gulp.task('browserSync', function() {
  browserSync.init({
    injectChanges: false,
    port: 8888,
    proxy: 'localhost:8888',
    ui: false/*,
    browser: 'chrome'*/
  })
})

//watch  for changes
gulp.task('watch', ['browserSync','sass'] ,function(){
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/css/**/*.css', browserSync.reload);
  gulp.watch('app/js/**/*.js', browserSync.reload);
  gulp.watch('app/*.php', browserSync.reload);
})
