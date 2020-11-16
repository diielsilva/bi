<?php



class AdminController
{

    public function resultLogin($result)
    {
        session_start();

        if (sizeof($result) == 0) {
            $_SESSION["error"] = "Usuário ou senha incorreto (a)";
            header("Location: ../index.php");
        } else {
            for ($init = 0; $init < sizeof($result); $init++) {
                $_SESSION["current-user"] = $result[$init]["username"];
            }
            header("Location: ../views/home.php");
        }
    }

    public function logoutAdmin()
    {
        session_start();
        if (isset($_SESSION["current-user"])) {
            unset($_SESSION["current-user"]);
        }
        session_destroy();
        header("Location: ../index.php");
    }

    public function resultStoreClient($result)
    {
        session_start();
        if ($result == 1) {
            $_SESSION["success"] = "Cliente cadastrado com sucesso";
        } else {
            $_SESSION["error"] = "CNPJ ou email já cadastrados";
        }
        header("Location: ../views/add_client.php");
    }

    public function resultListAllClients($result)
    {
        session_start();
        if (sizeof($result) > 0) {
            $_SESSION["clients"] = $result;
        }
        header("Location: ../views/list_clients.php");
    }

    public function resultRemoveClient($result)
    {
        session_start();
        if ($result == 1) {
            $_SESSION["success"] = "Cliente removido com sucesso";
        } else {
            $_SESSION["error"] = "Cliente vinculado a um projeto";
        }
    }

    public function resultUpdateClient($result)
    {
        session_start();
        if ($result == 1) {
            $_SESSION["success"] = "Cliente alterado com sucesso";
        } else {
            $_SESSION["error"] = "CNPJ ou email já cadastrado";
        }
        header("Location: ../views/edit_client.php?id=" . $_SESSION["id-client"]);
    }
}
