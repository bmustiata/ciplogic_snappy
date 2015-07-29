/**
 * Grunt project configuration.
 */
module.exports = function(grunt) {
    // configuration for the plugins.
    grunt.initConfig({
        sync : {
            dist : {
                // pretend: true,
                verbose: true,
                files : [
                    {
                        expand: true,
                        cwd: "src/",
                        src: [
                            "**/*.js",
                            "**/*.css",
                            "**/*.ttf",
                            "**/*.php",
                            "**/*.jpeg",
                            "**/*.html"
                        ],
                        dest: "/home/raptor/host/ciplogic/blog/templates/ciplogic_snappy"
                    }
                ]
            }
        }
    });

    // load NPM tasks:
    // grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-sync");

    // register our tasks:
    grunt.registerTask("default", ["sync"]);
};
