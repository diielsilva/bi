<?php
include_once("../php/verify_admin_online.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_home.css">
    <title>Home Admin</title>
</head>

<body>
    <nav>
        <header class="header">
            <ul>
                <li><a href="home.php">Início &nbsp;<span class="fas fa-home"></span></a></li>
                <li><a href="add_client.php">Adicionar Cliente &nbsp;<span class="fas fa-user-plus"></span></a></li>
                <li><a href="../php/list_clients.php">Menu de Clientes &nbsp;<span class="fas fa-user-cog"></span></a></li>
                <li><a href="../php/menu_projects.php">Menu de Projetos &nbsp;<span class="fas fa-folder"></span></a></li>
                <li><a href="../php/logout_admin.php">Sair &nbsp;<span class="fas fa-sign-out-alt"></span></a></li>
            </ul>
        </header>
    </nav>
    <main class="main">
        <h1>Seja bem-vindo <?php echo $_SESSION["current-user"]; ?> &nbsp;<span class="fas fa-user-tie"></span></h1>
    </main>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>