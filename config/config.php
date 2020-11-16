<?php
class Config
{
    public function verifyAdminOnline()
    {
        session_start();
        if (!isset($_SESSION["current-user"])) {
            header("Location: ../index.php");
        }
    }
}
