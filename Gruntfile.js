module.exports = function(grunt) {

  const sass = require('node-sass');

  require("load-grunt-tasks")(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    eslint: {
      options: {
        configFile: ".eslintrc.js"
      },
      target: ["js/**.js"]
    },

    /**
     * Concat
     */
    concat: {
      options: {
        separator: ";"
      },
      dist: {
        src: ["js/**/*.js"],
        dest: "js/concat/<%= pkg.name %>.js"
      }
    },

    /**
     * Uglify
     */
    uglify: {
      options: {
        banner:
          '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      my_target: {
        files: {
          "js/minified/audio-es6.min.js": ["js/audio-es6.js"],
          "js/minified/video-es6.min.js": ["js/video-es6.js"],
          "js/minified/audio.min.js": ["js/audio.js"],
          "js/minified/video.min.js": ["js/video.js"],
          "js/minified/customizer.min.js": ["js/customizer.js"],
          "js/minified/main.min.js": ["js/main.js"],
          "js/minified/navigation.min.js": ["js/navigation.js"],
          "js/minified/skip-link-focus-fix.min.js": [
            "js/skip-link-focus-fix.js"
          ]
        }
      }
    },
    /**
     * sass Task
     */
    sass: {
      options: {
        implementation: sass,
        sourceMap: true
      },
      dev: {

        files: {
          "style.css": "css/style.scss",
          "ie.css": "css/ie.scss"
          /*where file goes-----/where file from*/
        }
      },

      dist: {

        files: {
          "css/minified/style-min.css": "css/style.scss",
          "css/minified/ie-min.css": "css/ie.scss"

          /*where file goes-----/where file from*/
        }
      }
    },

    /**
     * Watch task
     */
    watch: {
      css: {
        files: "**/*.scss",
        tasks: ["sass"]
      }
    }
  });



  grunt.registerTask("default", [
    "watch",
    "concat",
    "uglify",
    "sass",
    "eslint"
  ]);
};

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
