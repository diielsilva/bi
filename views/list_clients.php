<?php
include_once("../php/verify_admin_online.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_list_clients.css">
    <title>Listar Clientes</title>
</head>

<body>
    <nav>
        <header class="header">
            <li><a href="home.php">Início &nbsp;<span class="fas fa-home"></span></a></li>
            <li><a href="add_client.php">Adicionar Cliente &nbsp;<span class="fas fa-user-plus"></span></a></li>
            <li><a href="../php/list_clients.php">Menu de Clientes &nbsp;<span class="fas fa-user-cog"></span></a></li>
            <li><a href="../php/logout_admin.php">Sair &nbsp;<span class="fas fa-sign-out-alt"></span></a></li>
        </header>
    </nav>
    <main class="main">
        <table class="table">
            <thead>
                <h3>Menu de Clientes</h3>
            </thead>
            <tr class="first-row">
                <td>ID</td>
                <td>Razão Social</td>
                <td>CNPJ</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Endereço</td>
                <td>Editar</td>
                <td>Remover</td>
            </tr>
            <?php
            if (isset($_SESSION["clients"])) {
                for ($init = 0; $init < sizeof($_SESSION["clients"]); $init++) {
                    echo "<tr>";
                    echo "<td>" . $_SESSION["clients"][$init]["id"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["company_name"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["cnpj"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["name"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["email"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["telephone"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["address"] . "</td>";
                    echo "<td> <a href='edit_client.php?id=" . $_SESSION["clients"][$init]["id"] . "'> <button class='edit'>Editar &nbsp;<span class='fas fa-user-edit'></span></button></a></td>";
                    echo "<td> <a href='../php/remove_client.php?id=" . $_SESSION["clients"][$init]["id"] . "'><button class='remove'>Remover &nbsp <span class='fas fa-user-times'></span></button></a>";
                }
            }
            unset($_SESSION["clients"]);
            ?>
        </table>
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
<script src="../scripts/pdf.js"></script>

</html>