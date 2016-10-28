(function () {
	'use strict';
}());

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
				  'assets/css/cutestrap.css' : 'assets/scss/cutestrap.scss'
				} 
			}
		},

		autoprefixer: {
			dist: {
				files: {
					'assets/css/scma_style.css': 'assets/css/cutestrap.css'
				}
			}
		},

		watch: {
            files: ['assets/scss/**/*.scss'],
            tasks: ['sass'],
            files: ['assets/css/cutestrap.css'],
            tasks: ['autoprefixer'],
            options: {
            	livereload: true
            },
        }

	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['sass', 'watch']);

};
