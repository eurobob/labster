module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    autoprefixer: {
      single_file: {
        src: 'app/wp-content/themes/labster/styles/css/main.css',
        dest: 'app/wp-content/themes/labster/dist/css/main.css'
      },
      options: {
        browsers: ['last 2 versions', 'ie 8', 'ie 9']
      }
    },

    browserSync: {
        dev: {
            bsFiles: {
                src : [
                  'app/wp-content/themes/labster/dist/css/main.css',
                  'app/wp-content/themes/labster/img/*.jpg',
                  'app/wp-content/themes/labster/img/*.png',
                  'app/wp-content/themes/labster/*.php',
                  'app/wp-content/themes/labster/js/*.js'
                ]
            },
            options: {
                watchTask: true,
                proxy: "labster.dev"
            }
        }
    },

    grunticon: {

      // Grunticon data URIs for non-interactive SVGs
      datauri: {
        files: [{
          expand: true,
          cwd: 'app/wp-content/themes/labster/img/svg/grunticon/datauri',
          src: '*.svg',
          dest: "app/wp-content/themes/labster/dist/img/svg/datauri"
        }],
        options: {
          datasvgcss: '../../../../app/wp-content/themes/labster/styles/sass/patterns/_grunticon_datauri.scss',
          cssprefix: '@mixin svg--'
        }
      },

      // Grunticon embedding for interactive SVGs
      embed: {
        files: [{
          expand: true,
          cwd: 'app/wp-content/themes/labster/img/svg/grunticon/embed',
          src: '*.svg',
          dest: "app/wp-content/themes/labster/dist/img/svg/embed"
        }],
        options: {
          enhanceSVG: true,
          cssprefix: '.svg-'
        }
      }
    },

    /**
     * JS Hinting
     */
    jshint: {
      files: [
        'app/wp-content/themes/labster/js/main.js'
      ],
      options: {
        reporter: require('jshint-stylish')
      }
    },

    modernizr: {

        dist: {
            // [REQUIRED] Path to the build you're using for development.
            "devFile" : "node_modules/grunt-modernizr/lib/modernizr-dev.js",

            // Path to save out the built file.
            "outputFile" : "app/wp-content/themes/labster/js/vendor/modernizr-custom.js",

            // Based on default settings on http://modernizr.com/download/
            "extra" : {
                "shiv" : true,
                "printshiv" : false,
                "load" : true,
                "mq" : false,
                "cssclasses" : true
            },

            // Based on default settings on http://modernizr.com/download/
            "extensibility" : {
                "addtest" : false,
                "prefixed" : false,
                "teststyles" : false,
                "testprops" : false,
                "testallprops" : false,
                "hasevents" : false,
                "prefixes" : false,
                "domprefixes" : false,
                "cssclassprefix": ""
            },

            // By default, source is uglified before saving
            "uglify" : true,

            // Define any tests you want to implicitly include.
            "tests" : [],

            // By default, this task will crawl your project for references to Modernizr tests.
            // Set to false to disable.
            "parseFiles" : true,

            // When parseFiles = true, matchCommunityTests = true will attempt to
            // match user-contributed tests.
            "matchCommunityTests" : false
        }

    },

    sass: {
      dist: {
        options: {
          style:'compressed'
        },
        files: {
          'app/wp-content/themes/labster/styles/css/main.css' : 'app/wp-content/themes/labster/styles/sass/main.scss'
        }
      },
    },

    svgstore: {
      svgs: {
        src: ['app/wp-content/themes/labster/img/svg/*.svg'],
        dest: 'app/wp-content/themes/labster/dist/img/sprite.svg'
      },
      options: {
        cleanup: ['fill'],
        prefix : 'svg-',
        svg: {
          "xmlns": 'http://www.w3.org/2000/svg',
          "xmlns:xlink": 'http://www.w3.org/1999/xlink'
        }
      }
    },

    uglify: {
      my_target: {
        options: {
          sourceMap: true,
          sourceMapName: 'path/to/sourcemap.map'
        },
        files: {
          'dest/output.min.js': ['src/input.js']
        }
      }
    },

    watch: {
      sass: {
        files: ['app/wp-content/themes/labster/styles/sass/**/*.scss'],
        tasks: ['sass', 'autoprefixer']
      },
      scripts: {
        files: [
          '<%= jshint.files %>'
        ],
        tasks: [
          'jshint'
        ]
      },
      svg: {
        files: ['app/wp-content/themes/labster/img/svg/*.svg'],
        tasks: ['grunticon']
      }
    }

  });

  // Default task(s).
  grunt.registerTask('default', ['browserSync','watch']);

};