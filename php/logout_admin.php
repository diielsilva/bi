<?php
include_once("../controllers/admin_controller.php");
include_once("verify_admin_online.php");

$controller = new AdminController();
$controller->logoutAdmin();
