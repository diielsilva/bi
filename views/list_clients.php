<?php
include_once("../php/verify_admin_online.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>

<body>
    <nav>
        <header class="header">
            <li><a href="home.php">Início &nbsp;<span class="fas fa-home"></span></a></li>
            <li><a href="add_client.php">Adicionar Cliente &nbsp;<span class="fas fa-user-plus"></span></a></li>
            <li><a href="../php/list_clients.php">Listar Clientes &nbsp;<span class="fas fa-users"></span></a></li>
            <li><a href="">Relatório dos Clientes &nbsp;<span class="fas fa-clipboard-list"></span></a></li>
            <li><a href="">Cadastrar Pedido &nbsp;<span class="fas fa-folder-plus"></span></a></li>
            <li><a href="../php/logout_admin.php">Sair &nbsp;<span class="fas fa-sign-out-alt"></span></a></li>
        </header>
    </nav>
    <main>
        <table>
            <thead>
                <h3>Lista de Clientes</h3>
            </thead>
            <tr>
                <td>ID</td>
                <td>Razão Social</td>
                <td>CNPJ</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Endereço</td>
                <td>Editar</td>
                <td>Remover</td>
                <td>Projetos</td>
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
                    echo "<td> <form action='' method='get'><button type='submit'>Editar &nbsp;<span></span></form></td>";
                }
            }
            ?>
        </table>
    </main>
</body>

</html>