def checkoutApp(String githubRepository, String credentialsId, String githubBranch){
    checkout([
    $class: 'GitSCM',
    branches: [[name: githubBranch]],
    doGenerateSubmoduleConfigurations:
    false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[ credentialsId: credentialsId, url: githubRepository ]] ]) }
node{
def githubRepository = 'https://github.com/azkiatunnisarf/URL-Shortener-ITS.git' 
def githubCredentialsId = 'd95cd8e4-f9b1-41e1-8377-0ce432099cc0' 
def githubBranch = '*/master' 
    stage('Checkout'){ 
        checkoutApp( githubRepository as String, 
        githubCredentialsId as String, githubBranch as String )
       
    }
    stage('Update latest change'){
       sh 'git pull origin master'
    }
}