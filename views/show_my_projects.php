<?php
include_once("../php/verify_admin_online.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_show_my_projects.css">
    <title>Meus Projetos</title>
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
    <main>
        <table>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Preço</td>
                <td>Prazo</td>
                <td>Status</td>
                <td>Editar</td>
                <td>Remover</td>
            </tr>
            <?php
            if (isset($_SESSION["projects"])) {
                for ($init = 0; $init < sizeof($_SESSION["projects"]); $init++) {
                    echo "<tr>";
                    echo "<td>" . $_SESSION["projects"][$init]["name"] . "</td>";
                    echo "<td>" . $_SESSION["projects"][$init]["description"] . "</td>";
                    echo "<td>" . $_SESSION["projects"][$init]["price"] . "</td>";
                    echo "<td>" . $_SESSION["projects"][$init]["deadline"] . "</td>";
                    echo "<td>" . $_SESSION["projects"][$init]["status"] . "</td>";
                    echo "<td><a><button>Editar &nbsp;<span class='fas fa-edit'></span></button></a></td>";
                    echo "<td><a><button>Remover &nbsp;<span class='fas fa-folder-minus'></span></button></a></td>";
                }
            }
            ?>
        </table>
        <div>
            <?php
            if (isset($_SESSION["error"])) {
                echo "<p>" . $_SESSION["error"] . "</p>";
                unset($_SESSION["error"]);
            } else if (isset($_SESSION["success"])) {
                echo "<p>" > $_SESSION["success"] . "</p>";
                unset($_SESSION["success"]);
            }
            ?>
        </div>
    </main>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>