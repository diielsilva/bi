<?php
include_once("connection.php");

class Client
{
    private $id;
    private $companyName;
    private $cnpj;
    private $name;
    private $email;
    private $telephone;
    private $address;
    private $connection;
    private $query;
    private $stmt;
    private $result;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function storeClient(Client $client)
    {

        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "INSERT INTO clients VALUES (null,?,?,?,?,?,?)";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->bindValue(1, $client->getCompanyName());
        $this->stmt->bindValue(2, $client->getCnpj());
        $this->stmt->bindValue(3, $client->getName());
        $this->stmt->bindValue(4, $client->getEmail());
        $this->stmt->bindValue(5, $client->getTelephone());
        $this->stmt->bindValue(6, $client->getAddress());
        $this->stmt->execute();
        $this->result = $this->stmt->rowCount();
        return $this->result;
    }

    public function listAllClients()
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "SELECT * FROM clients";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->execute();
        $this->result = $this->stmt->fetchAll();
        return $this->result;
    }
}
