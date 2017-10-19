module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                sourcemap: 'none'
            },
            dist: {
                files: {
                    'css/base-sass.css': 'css/sass/base-sass.scss'
                }
            }
        },
        cssmin: {
            options: {
                sourceMap: true
            },
            target: {
                files: {
                    'css/base-sass.min.css': ['css/base-sass.css']
                }
            }
        },
        watch: {
            scripts: {
                files: 'js/*.js',
                tasks: ['qunit', 'concat', 'uglify']
            },
            css: {
                files: 'css/sass/*.scss',
                tasks: ['sass', 'cssmin']
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default task(s).
    grunt.registerTask('default', ['sass', 'cssmin', 'watch']);

};