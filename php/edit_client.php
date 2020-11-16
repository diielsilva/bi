<?php
include_once("verify_admin_online.php");
include_once("../models/client.php");
include_once("../controllers/admin_controller.php");

$client = new Client();
$controller = new AdminController();
$client->setId($_SESSION["id-client"]);
$client->setCompanyName($_POST["company-name"]);
$client->setName($_POST["name"]);
$client->setEmail($_POST["email"]);
$client->setTelephone($_POST["telephone"]);
$client->setAddress($_POST["address"]);
$controller->resultUpdateClient($client->updateClient($client));