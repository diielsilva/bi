<?php
include_once("verify_admin_online.php");
include_once("../models/project.php");
include_once("../models/client.php");
include_once("../controllers/admin_controller.php");

$client = new Client();
$project = new Project();
$controller = new AdminController();

$client->setId($_SESSION["id-client"]);
$project->setId($_GET["id"]);
$controller->resultRemoveProject($project->deleteProject($project, $client));
$controller->resultGetMyProjects($project->getMyProjects($client));
