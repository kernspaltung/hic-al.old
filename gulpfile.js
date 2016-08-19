var gulp = require('gulp'),
sass = require('gulp-sass'),
autoprefixer = require('gulp-autoprefixer'),
cssnano = require('gulp-cssnano'),
jshint = require('gulp-jshint'),
minifycss = require('gulp-minify-css'),
uglify = require('gulp-uglify'),
imagemin = require('gulp-imagemin'),
rename = require('gulp-rename'),
concat = require('gulp-concat'),
notify = require('gulp-notify'),
cache = require('gulp-cache'),
livereload = require('gulp-livereload'),
del = require('del'),
sourcemaps = require('gulp-sourcemaps');



var config = {
    projectName: 'r4m4z4',
     sassDir: './src/scss',
     bowerDir: './bower_components' ,
     utils: './recursos/utils' ,
}

var paths = {
   html: [
      'src/html/**/*',
   ],
   stylesheet: config.sassDir + '/' + config.projectName + '.scss',
   sass: [
      config.bowerDir + '/bootstrap-sass/assets/stylesheets/',
      config.bowerDir + '/font-awesome/scss',
      config.utils + '/style_utils/scss',
      config.sassDir,
   ],
   js: [
      config.bowerDir + '/jquery/dist/jquery.js',
      config.bowerDir + '/bootstrap-sass/assets/javascripts/bootstrap.min.js',
      config.utils + '/js_utils/dist/frontendutils.js',
      'src/js/*.js'
   ],
   fonts: [
      config.bowerDir + '/font-awesome/fonts/**.*'
   ]
};




gulp.task('html', function() {
   return gulp.src( paths.html )
   .pipe(gulp.dest('dist/'))
   .pipe(notify({ message: 'Html copiado' }));

});



gulp.task('sass',function(){
  return gulp.src( paths.stylesheet )
    .pipe(sass({ includePaths : paths.sass , style: 'expanded' }))
    .pipe(autoprefixer('last 2 version'))
    .pipe(concat( config.projectName + '.min.css'))
    .pipe(minifycss())
    .pipe(gulp.dest('dist/assets/css'))
    .pipe(notify({ message: 'sass listo.' }));

})

gulp.task('fonts', function() { 
   return gulp.src( paths.fonts ) 
   .pipe(gulp.dest('dist/assets/fonts')); 
});



gulp.task('js', function() {
   return gulp.src(paths.js)
   // .pipe(jshint('.jshintrc'))
   // .pipe(jshint.reporter('default'))
   .pipe(concat( config.projectName + '.min.js'))
   .pipe(uglify())
   .pipe(gulp.dest('dist/assets/js'))
   // .pipe(rename({suffix: '.min'}))
   // .pipe(gulp.dest('dist/assets/js'))
   .pipe(notify({ message: 'js listos!' }));

});


gulp.task('images', function() {
  // return gulp.src('src/images/**/*')
  //   .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
  //   .pipe(gulp.dest('dist/assets/img'))
  //   .pipe(notify({ message: 'Images task complete' }));
});


gulp.task('clean', function() {
    return del(['dist/*']);
});


gulp.task('default', ['clean'], function() {
   gulp.start( 'html', 'fonts', 'sass', 'js', 'images' );
});


gulp.task('watch', function() {

  gulp.watch('src/scss/*', ['sass']);
  gulp.watch('src/js/*', ['js']);
  gulp.watch('src/html/*', ['html']);

  // gulp.watch('src/images/**/*', ['images']);
  livereload.listen();

  gulp.watch(['dist/**']).on('change', livereload.changed);

});
