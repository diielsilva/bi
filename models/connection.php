<?php
class Connection
{
    private $connection;

    public function openConnection()
    {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=db_bi", "root", "");
            return $this->connection;
        } catch (PDOException $ex) {
            echo "Não foi possível conectar ao servidor de banco de dados";
        }
    }

    public function closeConnection()
    {
        $this->connection = null;
    }
}
