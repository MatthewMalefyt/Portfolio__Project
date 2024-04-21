<?php

namespace Controller;

use models\Project;

class ProjectController
{

    public function getProjects() {
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