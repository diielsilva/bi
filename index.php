<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <title>Home Page</title>
</head>

<body>
    <header class="header">
        <h1>Projeto BI</h1>
    </header>
    <main class="main">
        <form action="php/result_login.php" method="post">
            <div>
                <input type="text" name="username" placeholder="Usuário" minlength="3" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Senha" minlength="3" required>
            </div>
            <div>
                <button type="submit">Entrar &nbsp;<span class="fas fa-sign-in-alt"></span></button>
            </div>
        </form>
        <?php
        session_start();
        if (isset($_SESSION["error"])) {
            echo "<p>" . $_SESSION["error"] . "&nbsp;<span class='fas fa-exclamation-circle'></span></p>";
            unset($_SESSION["error"]);
        }
        session_destroy();
        ?>
    </main>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</html>