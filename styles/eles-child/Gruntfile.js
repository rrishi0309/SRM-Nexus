'use strict';
module.exports = function(grunt) {

  // Load all grunt tasks
  require('load-grunt-tasks')(grunt);

  // Time tasks
  require('time-grunt')(grunt);

  // Paths
  var config = {
    theme: 'theme'
  };

  grunt.initConfig({

    // Add Paths
    config: config,

    // Watch
    watch: {
      sass: {
        files: ['<%= config.theme %>/scss/**/*.{scss,sass}'],
        tasks: ['sass'],
        options: {
            livereload: true,
            style: 'expanded',
          },
      },
      livereload: {
        options: { livereload: true },
        files: [
          'template/**/*.html',
          '<%= config.theme %>/*.css',
        ],
      },
    },

    /*
    // currently not implemented!
    // customize bootstrap less file for the theme
    'customize-bootstrap': {
      init: {
        options: {
          bootstrapPath: 'bower_components/bootstrap',
          src: 'theme/less-bootstrap',
          dest: 'bower_components/bootstrap/less',
        },
      },
    },
    */

    sass: {
      dist: {
        options: {
          style: 'expanded',
          sourcemap: 'none',
        },
        files: {
          '<%= config.theme %>/stylesheet.css': '<%= config.theme %>/scss/stylesheet.scss',
        },
      },
    },

    autoprefixer: {
      options: {
        browsers: [ 'last 3 versions', 'ie 9', 'ios 6', 'android 4' ],
        map: false,
      },
      files: {
        expand: true,
        flatten: true,
        src: '<%= config.theme %>/stylesheet.css',
        dest: '<%= config.theme %>/',
      },
    },

  });

  // buildcss
  grunt.registerTask( 'buildcss', [
    'sass',
    'autoprefixer',
  ]);

  // default task
  grunt.registerTask( 'default', [ 'sass', 'autoprefixer', 'watch' ] );
};
