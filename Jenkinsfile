pipeline {
    agent any
    stages {
        stage('build') {
            when { branch 'master' }
            steps {
                sh 'composer install'
            }
        }
    }
    post {
        always {
            deleteDir()
        }
    }
}
