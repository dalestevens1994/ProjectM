module.exports = function(grunt){

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                     "public/css/app.css" : "resources/assets/sass/app.scss"
                }
            }
        },

        watch: {
            sass: {
                files: 'resources/assets/sass/**/*.scss',
                tasks: ['sass'],
            },
        }
	});

	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-watch");

	grunt.registerTask('default', ["watch"])
}