<?php
include_once("../php/verify_admin_online.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_edit_client.css">
    <title>Editar Cliente</title>
</head>

<body>
    <nav>
        <header class="header">
            <ul>
                <li><a href="home.php">Início &nbsp;<span class="fas fa-home"></span></a></li>
                <li><a href="add_client.php">Adicionar Cliente &nbsp;<span class="fas fa-user-plus"></span></a></li>
                <li><a href="../php/list_clients.php">Menu de Clientes &nbsp;<span class="fas fa-user-cog"></span></a></li>
                <li><a href="../php/logout_admin.php">Sair &nbsp;<span class="fas fa-sign-out-alt"></span></a></li>
            </ul>
        </header>
    </nav>
    <main class="main">
        <?php
        $id = $_GET["id"];
        $_SESSION["id-client"] = $id;
        ?>
        <form action="../php/edit_client.php" method="post">
            <h1>Editar Cliente</h1>
            <div>
                <input type="text" name="company-name" placeholder="Razão Social" minlength="3" required>
            </div>
            <div>
                <input type="text" name="name" placeholder="Nome" minlength="3" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" minlength="3" required>
            </div>
            <div>
                <input type="tel" name="telephone" placeholder="Telefone" minlength="3" required>
            </div>
            <div>
                <input type="text" name="address" placeholder="Endereço" minlength="3" required>
            </div>
            <div>
                <button type="submit">Editar &nbsp;<span class="fas fa-save"></span></button>
            </div>
        </form>
        <div>
            <?php
            if (isset($_SESSION["error"])) {
                echo "<p class='error'>" . $_SESSION["error"] . "&nbsp;<span class='fas fa-exclamation-circle'></span></p>";
                unset($_SESSION["error"]);
            } else if (isset($_SESSION["success"])) {
                echo "<p class='success'>" . $_SESSION["success"] . "&nbsp;<span class='fas fa-check-circle'></span></p>";
                unset($_SESSION["success"]);
            }
            ?>
        </div>
    </main>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>