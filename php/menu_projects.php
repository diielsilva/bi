<?php
include_once("verify_admin_online.php");
include_once("../models/client.php");
include_once("../controllers/admin_controller.php");

$client = new Client();
$controller = new AdminController();
$controller->resultMenuProjects($client->listAllClients());
