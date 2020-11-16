<?php
include_once("../models/admin.php");
include_once("../controllers/admin_controller.php");

$admin = new Admin();
$controller = new AdminController();
$admin->setUsername($_POST["username"]);
$admin->setPassword($_POST["password"]);
$controller->resultLogin($admin->loginAdmin($admin));
