<?php
include_once("connection.php");

class Admin
{
    private $username;
    private $password;
    private $query;
    private $stmt;
    private $result;
    private $connection;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function loginAdmin(Admin $admin)
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "SELECT * FROM admin WHERE username=? AND password=?";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->bindValue(1, $admin->getUsername());
        $this->stmt->bindValue(2, $admin->getPassword());
        $this->stmt->execute();
        $this->result = $this->stmt->fetchAll();
        return $this->result;
    }
}
