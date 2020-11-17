<?php
include_once("../php/verify_admin_online.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_menu_projects.css">
    <title>Menu de Projetos</title>
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
        <h1>Menu de Projetos</h1>
        <table class="table">
            <tr class="first-row">
                <td>Razão Social</td>
                <td>CNPJ</td>
                <td>Adc. Projeto</td>
                <td>Meus Projetos</td>
            </tr>
            <?php
            if (isset($_SESSION["clients"])) {
                for ($init = 0; $init < sizeof($_SESSION["clients"]); $init++) {
                    echo "<tr>";
                    echo "<td>" . $_SESSION["clients"][$init]["company_name"] . "</td>";
                    echo "<td>" . $_SESSION["clients"][$init]["cnpj"] . "</td>";
                    echo "<td><a href='add_project.php?id=".$_SESSION["clients"][$init]["id"]."'><button class='add'>Adc. Projeto &nbsp; <span class='fas fa-folder-plus'></span></button></a></td>";
                    echo "<td><a href=''><button class='projects'>Meus Projetos &nbsp; <span class='fas fa-folder-open'></span></button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </main>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>