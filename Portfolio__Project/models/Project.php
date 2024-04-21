<?php

namespace models;

//using the database class namespace
use Database;

class Projects
{
    //using the trait, bring in all of its methods
    use Database;

    public function getAllProjects() {
        $query = "select * from projects";
        return $this->fetchAll($query);
    }
}
