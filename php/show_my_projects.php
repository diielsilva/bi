<?php
include_once("verify_admin_online.php");
include_once("../models/client.php");
include_once("../models/project.php");
include_once("../controllers/admin_controller.php");

$_SESSION["id-client"] = $_GET["id"];
$client = new Client();
$project = new Project();
$controller = new AdminController();
$client->setId($_GET["id"]);
$controller->resultGetMyProjects($project->getMyProjects($client));