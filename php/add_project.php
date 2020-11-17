<?php
include_once("verify_admin_online.php");
include_once("../models/client.php");
include_once("../models/project.php");
include_once("../controllers/admin_controller.php");

$controller = new AdminController();
$client = new Client();
$project = new Project();
$client->setId($_SESSION["id-client"]);
$project->setName($_POST["name"]);
$project->setPrice($_POST["price"]);
$project->setDeadline($_POST["deadline"]);
$project->setStatus($_POST["status"]);
$project->setDescription($_POST["description"]);
$controller->resultStoreProjects($project->storeProject($project, $client));
