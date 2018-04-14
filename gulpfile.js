var gulp     = require('gulp'),
    sass    = require('gulp-sass'),
    livereload  = require('gulp-livereload');

var config = {
    scripts: [
        // Custom Scripts
        './wp-content/themes/wp-blank/js/scripts.js'
    ]
};

gulp.task('sass', function () {
	return gulp.src('./wp-content/themes/wp-blank/style.less')
        .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(livereload())
        .pipe(gulp.dest('./wp-content/themes/wp-blank/'));
});

gulp.task('scripts', function () {
	return gulp.src(config.scripts)
	.pipe(livereload())
	.pipe(gulp.dest('./wp-content/themes/wp-blank/js/'));

});

gulp.task('watch', function () {
	livereload.listen(35729);
	gulp.watch('**/*.php').on('change', function(file) {
      livereload.changed(file.path);
  	});
	gulp.watch('./wp-content/themes/wp-blank/*.less', ['sass']);
	gulp.watch('./wp-content/themes/wp-blank/js/*.js', ['scripts']);
});

gulp.task('default', ['sass', 'scripts', 'watch']);
