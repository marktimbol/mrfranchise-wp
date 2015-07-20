
var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('sass', function () {
	gulp.src('resources/assets/sass/app.scss')
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(gulp.dest('public/css'));
});
 
gulp.task('default', function() {
	gulp.watch('resources/assets/sass/app.scss', ['sass']);
});