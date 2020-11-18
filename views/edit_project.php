<?php
include_once("../php/verify_admin_online.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_edit_project.css">
    <title>Editar Projeto</title>
</head>

<body>
    <nav>
        <header class="header">
            <li><a href="home.php">Início &nbsp;<span class="fas fa-home"></span></a></li>
            <li><a href="add_client.php">Adicionar Cliente &nbsp;<span class="fas fa-user-plus"></span></a></li>
            <li><a href="../php/list_clients.php">Menu de Clientes &nbsp;<span class="fas fa-user-cog"></span></a></li>
            <li><a href="../php/menu_projects.php">Menu de Projetos &nbsp;<span class="fas fa-folder"></span></a></li>
            <li><a href="../php/logout_admin.php">Sair &nbsp;<span class="fas fa-sign-out-alt"></span></a></li>
        </header>
    </nav>
    <main class="main">
        <?php
        $_SESSION["id-project"] = $_GET["id"];
        ?>
        <h1>Editar Projeto</h1>
        <form action="../php/edit_project.php" method="post">
            <div>
                <input type="number" name="price" placeholder="Preço" step="0.01" required>
            </div>
            <div>
                <input type="date" name="deadline" required>
            </div>
            <div>
                <select name="status" required>
                    <option value="" selected disabled>Status</option>
                    <option value="Em análise">Em análise</option>
                    <option value="Reprovado">Reprovado</option>
                    <option value="Aprovado">Aprovado</option>
                </select>
            </div>
            <div>
                <textarea name="description" placeholder="Descrição" required minlength="3" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit">Editar &nbsp;<span class="fas fa-edit"></span></button>
            </div>
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
        </form>
    </main>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>