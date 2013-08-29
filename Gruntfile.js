module.exports = function( grunt ) {
	'use strict';

	// Load all grunt tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
	
	// Project configuration
	grunt.initConfig( {
		pkg:    grunt.file.readJSON( 'package.json' ),
		concat: {
			options: {
				stripBanners: true,
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
					' * <%= pkg.homepage %>\n' +
					' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
					' * Licensed GPLv2+' +
					' */\n'
			},
			sonoma_index_tribune: {
				src: [
					'assets/js/src/*.js',
					'assets/js/vendor/*.js',

				],
				dest: 'assets/js/sonoma_index_tribune.js'
			}
		},
		jshint: {
			browser: {
				all: [
					'assets/js/src/**/*.js',
					'assets/js/test/**/*.js'
				],
				options: {
					jshintrc: '.jshintrc'
				}
			},
			grunt: {
				all: [
					'Gruntfile.js'
				],
				options: {
					jshintrc: '.gruntjshintrc'
				}
			}   
		},
		uglify: {
			all: {
				files: {
					'assets/js/sonoma_index_tribune.min.js': ['assets/js/sonoma_index_tribune.js']
				},
				options: {
					banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
						' * <%= pkg.homepage %>\n' +
						' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
						' * Licensed GPLv2+' +
						' */\n',
					mangle: {
						except: ['jQuery']
					}
				}
			}
		},
		test:   {
			files: ['assets/js/test/**/*.js']
		},

		compass: {                  // Task
		  dist: {                   // Target
		    options: {              // Target options
		      sassDir: 'assets/css/sass',
		      cssDir: 'assets/css/css',
		      environment: 'production',
		      outputStyle: 'nested',
		    }
		  },
		},
		
		cssmin: {
			options: {
				banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
					' * <%= pkg.homepage %>\n' +
					' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
					' * Licensed GPLv2+' +
					' */\n'
			},
			minify: {
				expand: true,
				
				cwd: 'assets/css/css/',
				src: ['*.css', '!*.min.css'],
				
				dest: 'assets/css/',
				ext: '.min.css'
			}
		},
		watch:  {
			
			compass: {
				files: ['assets/css/sass/*.scss','assets/css/sass/partials/*.scss'],
				tasks: ['compass', 'cssmin'],
				options: {
					debounceDelay: 500
				}
			},
			
			scripts: {
				files: ['assets/js/src/*.js', 'assets/js/vendor/*.js'],
				tasks: ['jshint', 'concat', 'uglify'],
				options: {
					debounceDelay: 500
				}
			}
		}
	} );

	// Default task.
	
	grunt.registerTask( 'default', ['jshint', 'concat', 'uglify', 'compass', 'cssmin'] );
	

	grunt.util.linefeed = '\n';
};