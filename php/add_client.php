<?php
include_once("../models/client.php");
include_once("../controllers/admin_controller.php");

$client = new Client();
$controller = new AdminController();

$client->setCompanyName($_POST["company-name"]);
$client->setCnpj($_POST["cnpj"]);
$client->setName($_POST["name"]);
$client->setEmail($_POST["email"]);
$client->setTelephone($_POST["telephone"]);
$client->setAddress($_POST["address"]);
$controller->resultStoreClient($client->storeClient($client));
