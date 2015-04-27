module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Uglify
    uglify: {
      dist: {
        src: 'src/js/*.js',
        dest: 'dist/js/script.min.js'
      },
      src: {
        options: {
          beautify: true,
          mangle: false,
          compress: false,
          preserve: 'all'
        },
        src: 'src/js/*.js',
        dest: 'dist/js/script.min.js'
      }
    },

    // Watch

    watch: {
      js: {
        files: ['src/js/*.js'],
        tasks: ['uglify:src']
      },
      css: {
        files: ['src/scss/**/*.scss'],
        tasks: ['sass:src']
      }
    },

    // Sass

    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'dist/style.css' : 'src/scss/application.scss'
        }
      },
      src: {
        options: {
          style: 'expanded'
        },
        files: {
          'dist/style.css' : 'src/scss/application.scss'
        }
      }
    }

  });


  // Load the plugin tasks
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');


  // Default tasks
  grunt.registerTask('default', ['uglify:src', 'sass:src']);
  grunt.registerTask('build', ['uglify:dist', 'sass:dist']);

};