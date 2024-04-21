
<?php
$env = parse_ini_file('./.env');
require './config.php';
require './Controller/ProjectController.php';
require "./Database.php";
require "./models/Project.php";

use Controller\ProjectController;


$uri = strtok($_SERVER["REQUEST_URI"], '?');

$uriArray = explode("/", $uri);
//0 = ""
//1 = users
//2 = 1



//get all or a single user

if ($uri === '/projects' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $projectController = new ProjectController();
    $projectController->getProjects();
}

if ($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $projectController = new ProjectController();
    $projectController->projectsView();
}

if ($uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectController = new ProjectController();
    $projectController->saveUser();
}



?>