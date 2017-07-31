var project=__dirname.split("\\").pop();

//server details
var hostname='gromgasper.com';
var username='gromgasper';
var remoteFolder = 'dev/'+project+"/";



// Globals
var browserSync = require('browser-sync'),
    gulp = require('gulp'),
    autoPrefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    flatten = require('gulp-flatten');
cssNano = require('gulp-cssnano'),
    fileInclude = require('gulp-file-include'),
    imageMin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    sftp = require('gulp-sftp'),
    sourcemaps = require('gulp-sourcemaps'),
    watch = require('gulp-watch'),
    runSequence = require('run-sequence'),
    htmlmin = require('gulp-htmlmin'),
    zip = require('gulp-zip'),
    gutil = require( 'gulp-util' ),
    ftp = require( 'vinyl-ftp' );

// Paths
var paths = {
    dist: './dist/',
    src: './assets/'
};

// Clean
gulp.task('clean', require('del').bind(null, [paths.dist]));

// Styles
gulp.task('styles', function() {
    return gulp.src(paths.src + 'styles/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoPrefixer({
            browsers: [
                'last 2 version',
                'android 2.3',
                'android 4',
                'opera 12'
            ]
        }))
        .pipe(cssNano())
        .pipe(sourcemaps.write('sourcemaps'))
        .pipe(gulp.dest(paths.dist + 'styles'))
        .pipe(browserSync.stream());
});

// Scripts
gulp.task('scripts', function() {
    return gulp.src(paths.src + 'scripts/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(sourcemaps.write('sourcemaps'))
        .pipe(gulp.dest(paths.dist + 'scripts'))
        .pipe(browserSync.stream());
});
gulp.task('jslibrary', function() {
    return gulp.src([
        "node_modules/jquery/dist/jquery.min.js",
        "node_modules/lightgallery.js/dist/js/lightgallery.min.js" ,
        "node_modules/lightgallery.js/dist/js/lg-thumbnail.min.js" ,
        "node_modules/lightgallery.js/dist/js/llg-fullscreen.min.js" ,
        paths.src + 'js/**/*.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('libraries.js'))
        .pipe(sourcemaps.write('sourcemaps'))
        .pipe(gulp.dest(paths.dist + 'scripts'))
        .pipe(browserSync.stream());
});
// Images
gulp.task('images', function() {
    return gulp.src(paths.src + 'images/*')
        .pipe(imageMin({
            progressive: true,
            interlaced: true,
            svgoPlugins: [{removeUnknownsAndDefaults: false}, {cleanupIDs: false}]
        }))
        .pipe(gulp.dest(paths.dist + 'images'))
        .pipe(browserSync.stream());
});

// Html
gulp.task('fileIncludeMain', function() {
    return gulp.src([paths.src + 'templates/*.html', paths.src + 'templates/*.php'])
        .pipe(fileInclude())
        .pipe(gulp.dest(paths.dist))
        .pipe(browserSync.stream());
});
gulp.task('fileIncludeAdmin', function() {
    return gulp.src([paths.src + 'templates/admin/*.html', paths.src + 'templates/admin/*.php'])
        .pipe(fileInclude())
        .pipe(gulp.dest(paths.dist + 'admin/'))
        .pipe(browserSync.stream());
});

gulp.task('html', function(callback) {
    runSequence('fileIncludeMain', 'fileIncludeAdmin',
        callback);
});

// Fonts
gulp.task('fonts', function() {
    return gulp.src(paths.src + 'fonts/*')
        .pipe(flatten())
        .pipe(gulp.dest(paths.dist + 'fonts'))
        .pipe(browserSync.stream());
});

gulp.task('upload', function(callback) {
    runSequence(
        'build',
        'ftp');
});

function getFtpConnection(d) {
    return ftp.create({
        host: hostname,
        port: 21,
        user: username,
        password: d.toString().trim(),
        parallel: 5,
        log: gutil.log
    });
}

var conn;

gulp.task('ftp', function() {
    process.stdout.write("Please enter password:            ");
    var stdin = process.openStdin();
    stdin.addListener("data", function(d) {
        conn=getFtpConnection(d);
        return gulp.src([paths.dist + '**/*'], { base: 'dist/', buffer: false })
            .pipe( conn.newer( remoteFolder ) ) // only upload newer files
            .pipe( conn.dest( remoteFolder ) )

    });
});

gulp.task('ftp-html', function(callback) {
    return gulp.src( [paths.dist + "*.html" ], { base: 'dist/', buffer: false } )
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files
        .pipe( conn.dest( remoteFolder ) )
        ;
});

gulp.task('ftp-styles', function(callback) {
    return gulp.src( [paths.dist + "styles/**/*" ], { base: 'dist/', buffer: false } )
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files
        .pipe( conn.dest( remoteFolder ) )
        ;
});
gulp.task('ftp-scripts', function(callback) {
    return gulp.src( [paths.dist + "scripts/**/*" ], { base: 'dist/', buffer: false } )
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files
        .pipe( conn.dest( remoteFolder ) )
        ;
});
gulp.task('ftp-watch', function() {
    process.stdout.write("Please enter password:            ");
    var stdin = process.openStdin();
    stdin.addListener("data", function(d) {
        //single files
        conn=getFtpConnection(d);
        gulp.watch('./assets/templates/**/*.html')
            .on('change', function(event) {
                runSequence('html', 'ftp-html');
                console.log('Changes detected! Uploading html files');
            });
        gulp.watch('./assets/styles/**/*.scss')
            .on('change', function(event) {
                runSequence('styles', 'ftp-styles');
                console.log('Changes detected! Uploading styles');
            });
        gulp.watch('./assets/scripts/*.js')
            .on('change', function(event) {
                runSequence('scripts', 'ftp-scripts');
                console.log('Changes detected! Uploading scripts');
            });
    });
});

gulp.task('zip', function(callback) {
    return gulp.src(paths.dist + '**/*')
        .pipe(zip(project+'.zip'))
        .pipe(gulp.dest('.'))
});

// Default Gulp Build
gulp.task('build', function(callback) {
    runSequence(
        'clean',
        'styles',
        'scripts',
        'jslibrary',
        'fonts',
        'images',
        'html',
        callback);
});


// Gulp Build - Same as Default, but with a clean up beforehand
gulp.task('default', function() {
    runSequence(
        'clean',
        'styles',
        'scripts',
        'jslibrary',
        'fonts',
        'images',
        'html',
        'watch');
});

/* Gulp watch - watch changes of files in 'src' folder (run it by 'gulp watch') */
gulp.task('watch', function() {
    browserSync.init({
        proxy: 'localhost/'+project,
        port: 4000,
        ui: {
            port: 4001
        },
        files: [
            "./assets/**/*.{html,js,scss}"
        ]
    });
    gulp.watch('./assets/templates/**/*', ['html']);
    gulp.watch('./assets/scripts/**/*', ['scripts']);
    gulp.watch('./assets/styles/**/*.scss', ['styles']);
});
