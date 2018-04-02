module.exports = function (grunt) {
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /**
         * Concat
         */
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['js/**/*.js'],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },

        /**
         * Uglify
         */
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            my_target: {
                
                files: {
                    'clashvibes/js/dist/audio.min.js': ['clashvibes/js/audio.js'],
                    'clashvibes/js/dist/customizer.min.js': ['clashvibes/js/customizer.js'],
                    'clashvibes/js/dist/main.min.js': ['clashvibes/js/main.js'],
                    'clashvibes/js/dist/navigation.min.js': ['clashvibes/js/navigation.js'],
                    'clashvibes/js/dist/skip-link-focus-fix.min.js': ['clashvibes/js/skip-link-focus-fix.js']
                    
                }
            }
        },
        /**
         * sass Task
         */
        sass: {
            dev: {
                options: {
                    style: 'expanded',
                    sourcemap: 'auto'
                },
                files: {
                    'clashvibes/css/style.css': 'clashvibes/css/style.scss'
                            /*where file goes-----/where file from*/
                }
            },

            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: 'auto'
                },
                files: {
                    'clashvibes/style-min.css': 'clashvibes/css/style.scss'
                            /*where file goes-----/where file from*/
                }
            }
        },

        /**
         * JS Hint
         */
        jshint: {
            files: ['Gruntfile.js', 'clashvibes/js/**/*.js', 'clashvibes/test/**/*.js'],
            options: {
                // options here to override JSHint defaults

                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },
        /**
         * Watch task
         */
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass']
            }
        }
    });

	

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');

    grunt.registerTask('test', ['jshint']);
    grunt.registerTask('default', ['watch', 'jshint', 'concat', 'uglify', 'sass']);


}

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
