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
        stage('deploy') {
            when { branch 'master' }
            steps {
                sh 'php src/main.php'
            }
        }
    }
    post {
        always {
            deleteDir()
        }
    }
}
