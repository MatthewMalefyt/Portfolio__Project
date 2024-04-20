<?php

namespace Controller;

//use Project;

class ProjectController
{

    public function getProjects($id) {
        $projectModel = new Project();
        header("Content-Type: application/json");
        
            $projects = $projectModel->getAllprojects();
        echo json_encode($projects);
        exit();
    }

    public function projectsView() {
        include './assets/index.html';
        exit();
    }

}