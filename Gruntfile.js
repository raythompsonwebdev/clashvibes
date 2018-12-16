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
                dest: 'js/concat/<%= pkg.name %>.js'
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
                    'js/minified/audio.min.js': ['js/audio.js'],
                    'js/minified/customizer.min.js': ['js/customizer.js'],
                    'js/minified/main.min.js': ['js/main.js'],
                    'js/minified/navigation.min.js': ['js/navigation.js'],
                    'js/minified/skip-link-focus-fix.min.js': ['js/skip-link-focus-fix.js']
                    
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
                    'style.css': 'css/style.scss',
                    'ie.css': 'css/ie.scss',
                    'reset.css': 'css/reset.scss',

                            /*where file goes-----/where file from*/
                }
            },

            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: 'auto'
                },
                files: {
                    'css/minified/style-min.css': 'css/style.scss',
                    'css/minified/reset-min.css': 'css/reset.scss',
                    'css/minified/ie-min.css': 'css/ie.scss'

                            /*where file goes-----/where file from*/
                }
            }
        },

        /**
         * JS Hint
         */
        jshint: {
            files: ['Gruntfile.js', 'js/**/*.js', 'test/**/*.js'],
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
