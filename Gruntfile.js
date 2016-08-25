module.exports = function (grunt) {
    require('jit-grunt')(grunt, {
        replace: 'grunt-text-replace'
    });

    grunt.task.registerTask('deployGAE', 'Deploy to GAE', function (isDev) {
        require('shelljs/global');
        var mavenPath = exec('mvn --version | grep "Maven home:" | cut -d \' \' -f3', {silent: true}).stdout;
        var done = this.async();
        if (!mavenPath) {
            grunt.log.error('Unable to get Maven home folder');
            done(false);
            return;
        }
        if (exec('mvn clean install -DskipTests=true').code === 0) {
            grunt.log.ok('build Successful');
            if (exec('mvn -Dmaven.multiModuleProjectDirectory=./ appengine:update -f ./pom.xml -DskipTests=true').code === 0) {
                grunt.log.ok('Deploy Successful');
                done();
            } else {
                grunt.log.error('Error at deploy time');
                done(false);
            }
        } else {
            grunt.log.error('Error at deploy time');
            done(false);
        }
    });

    grunt.registerTask('mvn', 'Mvn Build script', function () {
        require('shelljs/global');
        var done = this.async();
        if (exec('mvn -e clean install -DskipTests=true -U').code === 0) {
            grunt.log.ok('Build Successful');
            done();
        } else {
            grunt.log.error('Error at compile time');
            done(false);
        }
    });

    grunt.registerTask('deploy', ['deployGAE']);

};