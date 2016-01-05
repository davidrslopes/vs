module.exports = function(grunt) {

    grunt.initConfig(
        {
            // Read the configuration file
            pkg: grunt.file.readJSON("package.json"),

            /***************************************************************************
             * Dependencies - Copy Bower/JS dependencies to the theme"s folders
             ***************************************************************************/

            bowercopy: {
                options: {
                    srcPrefix: "bower_components",
                    //runBower: true,
                },
                jquery: {
                    src: "jquery/dist",
                    dest: "src/vendor/jquery",
                },
                bootstrap: {
                    src: "bootstrap/dist",
                    dest: "src/vendor/bootstrap",
                },
                bootstrap_less: {
                    src: "bower_components/bootstrap/less",
                    dest: "src/less/bootstrap"
                },
                bootstrap_plugins: {
                    src: "bootstrap/js",
                    dest: "src/vendor/bootstrap/js",
                },
                jasny_bootstrap: {
                    src: "jasny-bootstrap/dist",
                    dest: "src/vendor/jasny-bootstrap",
                },
                masonry: {
                    options: {
                        srcPrefix: "bower_components/masonry/dist",
                        destPrefix: "src/vendor/masonry"
                    },
                    files: { "masonry.js": "masonry.pkgd.js" }
                },
                imagesloaded: {
                    options: {
                        srcPrefix: "bower_components/imagesloaded",
                        destPrefix: "src/vendor/imagesloaded"
                    },
                    files: { "imagesloaded.js": "imagesloaded.pkgd.js" }
                },
                anijs: {
                    options: {
                        srcPrefix: "bower_components/anijs/dist",
                        destPrefix: "src/vendor/anijs"
                    },
                    files: { "anijs.js": "anijs.js" }
                },
                animate_css: {
                    options: {
                        srcPrefix: "bower_components/animate.css",
                        destPrefix: "src/vendor/animate.css"
                    },
                    files: { "animate.css": "animate.css" },
                },
                fontawesome_fonts: {
                    src: "bower_components/fontawesome/fonts",
                    dest: "assets/fonts"
                },
                fontawesome_css: {
                     options: {
                        srcPrefix: "bower_components/fontawesome/css",
                        destPrefix: "src/vendor/fontawesome/css"
                    },
                    files: { "font-awesome.css": "font-awesome.css" }
                },
                ionicons_fonts: {
                    src: "bower_components/ionicons/fonts",
                    dest: "assets/fonts"
                },
                ionicons_css: {
                     options: {
                        srcPrefix: "bower_components/ionicons/css",
                        destPrefix: "src/vendor/ionicons/css"
                    },
                    files: { "ionicons.css": "ionicons.css" }
                },
                modernizr: {
                    options: {
                        srcPrefix: "bower_components/modernizr",
                        destPrefix: "assets/js"
                    },
                    files: { "modernizr.js": "modernizr.js" },
                },
                respond: {
                    options: {
                        srcPrefix: "bower_components/respond-minmax/dest",
                        destPrefix: "assets/js"
                    },
                    files: { "respond.min.js": "respond.min.js" },
                },
                navwalker: {
                    options: {
                        srcPrefix: "bower_components/wp-bootstrap-navwalker",
                        destPrefix: "inc/lib"
                    },
                    files: { "wp_bootstrap_navwalker.php": "wp_bootstrap_navwalker.php" },
                }
            }, // bowercopy

            /***************************************************************************
             * LESS & CSS
             ***************************************************************************/

            // LESS to CSS
            less: {
                development: {
                    files: {"src/css/style.css": "src/less/style.less"}
                }
            }, //less

            // Minify & concat CSS
            cssmin: {
                options: {
                    keepSpecialComments: 0,
                },
                combine: {
                    files: {
                        'assets/css/style.min.css': [
                                                        'src/vendor/bootstrap/css/bootstrap.css',
                                                        'src/vendor/jasny-bootstrap/css/jasny-bootstrap.css',
                                                        'src/vendor/animate.css/animate.css',
                                                        'src/vendor/fontawesome/css/font-awesome.css',
                                                        'src/vendor/ionicons/css/ionicons.css',
                                                        'src/css/style.css',
                                                    ],
                        'assets/css/editor-style.min.css': [
                                                        'src/css/editor-style.css'
                                                            ]
                    },
                }
            }, // cssmin

            /***************************************************************************
             * Javascript
             ***************************************************************************/

            // Join JS files
            concat: {
                options: {
                    stripBanners: true,
                },
                jsfiles: {
                    src: [
                            'src/vendor/jquery/jquery.js',
                            //'../../../wp-includes/js/jquery/jquery.js', WP version
                            'src/vendor/bootstrap/js/bootstrap.js',
                            'src/vendor/bootstrap/js/carousel.js',
                            'src/vendor/bootstrap/js/tooltip.js',
                            'src/vendor/bootstrap/js/popover.js',
                            'src/vendor/jasny-bootstrap/js/jasny-bootstrap.js',
                            'src/vendor/masonry/masonry.js',
                            'src/vendor/imagesloaded/imagesloaded.js',
                            'src/vendor/anijs/anijs.js',
                            'src/js/msdpds.js',
                        ],
                    dest: 'build/js/app.js', // unminified version for debugging
                    nonull: true,
                },
            }, // concat

            // Minify JS
            uglify: {
                jsfiles: {
                    files: {
                        'assets/js/app.min.js': ['build/js/app.js']
                    }
                },
            }, // uglify


            /***************************************************************************
             * Images
             ***************************************************************************/

            imagemin: {
                dynamic: {
                    options: {
                        cache: false
                    },
                    files: [{
                        expand: true,                       // Enable dynamic expansion
                        cwd: 'src/img/',                    // Src matches are relative to this path
                        src: ['**/*.{png,jpg,gif,svg}'],    // Actual patterns to match
                        dest: 'assets/img/'                 // Destination path prefix
                    }]
                }
            }, // imagemin

             /***************************************************************************
              * i18n
              ***************************************************************************/

             // Add missing textdomain strings
             addtextdomain: {
                 options: {
                     textdomain: 'msdpds-theme',    // Project text domain.
                 },
                 target: {
                     files: {
                         src: [ '*.php', '**/*.php', '!node_modules/**', '!bower_components/**', '!tests/**' ]
                     }
                 }
             }, //addtextdomain

             // Generate fresh .POT file
             makepot: {
                 target: {
                     options: {
                         domainPath: '/languages',
                         mainFile: 'index.php',
                         potComments: 'Copyright (c) {year} Hi-Media Portugal',
                         potFilename: 'msdpds-theme.pot',
                         potHeaders: {
                             poedit: true,
                             'x-poedit-keywordslist': true
                         },
                         type: 'wp-theme',
                         updateTimestamp: true
                     }
                 }
             }, //makepot

            /***************************************************************************
             * Watch
             ***************************************************************************/

             watch: {
                options: {
                    livereload: true, // Live Reload enabled - https://github.com/gruntjs/grunt-contrib-watch/blob/master/docs/watch-examples.md#enabling-live-reload-in-your-html
                },
                php:{
                    files: ['*.php', '**/*.php'],
                },
                lessfiles: {
                    files: ['*.less', '**/*.less'],
                    tasks: ['less']
                },
                cssfiles: {
                    files: ['src/css/*.css'],
                    tasks: ['cssmin']
                },
                jsfiles: {
                    files: ['src/js/*.js'],
                    tasks: ['concat', 'uglify']
                },
                images: {
                    files: ['src/img/**/*.{png,jpg,gif,svg}'],
                    tasks: ['imagemin']
                },
            }, // watch
        }
    )

    // Load tasks
    grunt.loadNpmTasks("grunt-bowercopy");
    grunt.loadNpmTasks("grunt-contrib-imagemin");
    grunt.loadNpmTasks("grunt-contrib-less");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-wp-i18n");
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Register commands
    grunt.registerTask("default", ["bowercopy", "less", "cssmin", "concat", "uglify", "imagemin", "watch"]);
    grunt.registerTask("design", ["less", "cssmin", "concat", "uglify", "imagemin", "watch"]);
    grunt.registerTask("i18n", ["addtextdomain", "makepot"]);

};