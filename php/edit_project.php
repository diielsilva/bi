<?php
include_once("verify_admin_online.php");
include_once("../models/project.php");
include_once("../controllers/admin_controller.php");

$project = new Project();
$controller = new AdminController();
$project->setId($_SESSION["id-project"]);
$project->setPrice($_POST["price"]);
$project->setDeadline($_POST["deadline"]);
$project->setStatus($_POST["status"]);
$project->setDescription($_POST["description"]);
$controller->resultUpdateProject($project->updateProjetc($project));
