pipeline {
    agent any
    stages {
        stage('build') {
            when { branch 'master' }
            steps {
                sh 'composer install'
            }
        }
        stage('test') {
            when { branch 'master' }
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
    post {
        always {
            deleteDir()
        }
    }
}
