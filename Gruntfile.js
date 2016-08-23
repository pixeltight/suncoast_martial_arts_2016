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

		watch: {
            files: ['assets/scss/**/*.scss'],
            tasks: ['sass'],
            options: {
            	livereload: true
            }
        }

	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['sass', 'watch']);

};
