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
				tether: {
					src: "tether/dist",
					dest: "src/vendor/tether",
				},
				bootstrap4: {
					src: "bootstrap/dist",
					dest: "src/vendor/bootstrap",
				},
				bootstrap4_sass: {
					src: "bower_components/bootstrap/scss",
					dest: "src/scss/bootstrap"
				},
				bootstrap4_plugins: {
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
				blockadblock: {
					options: {
						srcPrefix: "bower_components/blockadblock",
						destPrefix: "src/vendor/blockadblock"
					},
					files: { "blockadblock.js": "blockadblock.js" }
				}
			}, // bowercopy

			/***************************************************************************
			 * SASS & CSS
			 ***************************************************************************/
			sass:{
				dist: {
					files: {"src/css/style.css": "src/scss/style.scss"}
				}
			}, //sass
			cssmin: {
				options: {
					keepSpecialComments: 0,
				},
				combine: {
					files: {
						'assets/css/style.min.css': [
							'src/vendor/tether/css/tether.css',
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
							'src/vendor/tether/js/tether.js',
							'src/vendor/bootstrap/js/bootstrap.js',
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
						'assets/js/app.min.js': ['build/js/app.js'],
						'assets/js/blockadblock.min.js': ['src/vendor/blockadblock/blockadblock.js']
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
				sassfiles: {
					files: ['*.scss', '**/*.scss'],
					tasks: ['sass']
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
	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-cssmin");
	grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register commands
	grunt.registerTask("default", ["bowercopy", "sass", "cssmin", "concat", "uglify", "imagemin", "watch"]);
	grunt.registerTask("design", ["sass", "cssmin", "concat", "uglify", "imagemin", "watch"]);

};