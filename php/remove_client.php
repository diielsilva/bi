<?php
include_once("verify_admin_online.php");
include_once("../controllers/admin_controller.php");
include_once("../models/client.php");

$client = new Client();
$controller = new AdminController();
$client->setId($_GET["id"]);
$controller->resultRemoveClient($client->deleteClient($client));
$controller->resultListAllClients($client->listAllClients());
