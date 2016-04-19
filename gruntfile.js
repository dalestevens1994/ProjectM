module.exports = function(grunt){

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                     "assets/css/app.css" : "resources/assets/sass/styles.scss"
                }
            }
        },

        watch: {
            sass: {
                files: 'resources/assets/sass/**/*.scss',
                tasks: ['sass_globbing', 'sass'],
            }
        },

        sass_globbing: {
            your_target: {
                files: {
                    'resources/assets/sass/_variable.scss': 'resources/assets/sass/_variables/**/*.scss',
                    'resources/assets/sass/_mixin.scss': 'resources/assets/sass/_mixins/**/*.scss',
                    'resources/assets/sass/external.scss': 'resources/assets/sass/external/**/*.scss',
                    'resources/assets/sass/partials.scss': 'resources/assets/sass/partials/**/*.scss',
                    'resources/assets/sass/styles.scss': 'resources/assets/sass/*.scss',
                }
            }
        }
	});

	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks('grunt-sass-globbing');
	grunt.registerTask('default', ["watch"]);
}