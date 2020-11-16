<?php
include_once("../php/verify_admin_online.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_add_client.css">
    <title>Adicionar Cliente</title>
</head>

<body>
    <nav>
        <header class="header">
            <li><a href="">Adicionar Cliente &nbsp;<span class="fas fa-user-plus"></span></a></li>
            <li><a href="">Listar Clientes &nbsp;<span class="fas fa-users"></span></a></li>
            <li><a href="">Relatório dos Clientes &nbsp;<span class="fas fa-clipboard-list"></span></a></li>
            <li><a href="">Cadastrar Pedido &nbsp;<span class="fas fa-folder-plus"></span></a></li>
            <li><a href="../php/logout_admin.php">Sair &nbsp;<span class="fas fa-sign-out-alt"></span></a></li>
        </header>
    </nav>
    <main>
        <form action="" method="post">
            <div>
                <input type="text" name="company-name" placeholder="Razão Social" minlength="3" required>
            </div>
            <div>
                <input type="text" name="cnpj" placeholder="CNPJ" minlength="14" maxlength="18" required>
            </div>
            <div>
                <input type="text" name="name" placeholder="Nome do Contato" minlength="3" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="tel" name="telephone" placeholder="Telefone" minlength="3" required>
            </div>
            <div>
                <input type="text" name="address" placeholder="Endereço" minlength="3" required>
            </div>
            <div>
                <button type="submit">Cadastrar &nbsp;<span class="fas fa-save"></span></button>
            </div>
        </form>
        <?php
        if (isset($_SESSION["error"])) {
            echo "<p>" . $_SESSION["error"] . "&nbsp;<span class='fas fa-exclamation-circle'></span></p>";
            unset($_SESSION["error"]);
        } else if (isset($_SESSION["success"])) {
            echo "<p>" . $_SESSION["error"] . "&nbsp;<span class='fas fa-check-circle'></span></p>";
            unset($_SESSION["success"]);
        }
        ?>
    </main>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>