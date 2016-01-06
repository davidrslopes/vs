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
				navwalker: {
					options: {
						srcPrefix: "bower_components/wp-bootstrap-navwalker",
						destPrefix: "functions/lib"
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
							'src/vendor/bootstrap/js/bootstrap.js',
							//'src/vendor/bootstrap/js/*****.js', Use bootstrap additional modules when needed
							'src/js/script.js',
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
			 * Watch
			 ***************************************************************************/

			 watch: {
				options: {
					livereload: true,
				},
				markupfiles:{
					files: ['*.php', '**/*.php', '*.html', '**/*.html']
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
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register commands
	grunt.registerTask("default", ["bowercopy", "less", "cssmin", "concat", "uglify", "imagemin", "watch"]);
	grunt.registerTask("design", ["less", "cssmin", "concat", "uglify", "imagemin", "watch"]);

};