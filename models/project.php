<?php
include_once("connection.php");
include_once("client.php");

class Project
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $deadline;
    private $status;
    private $clientProject;
    private $connection;
    private $query;
    private $result;
    private $stmt;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDeadline($deadline)
    {
        $this->deadline = date("Y:m:d", strtotime($deadline));
    }

    public function getDeadline()
    {
        return $this->deadline;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setClientProject($clientProject)
    {
        $this->clientProject = $clientProject;
    }

    public function getClientProject()
    {
        return $this->clientProject;
    }

    public function storeProject(Project $project, Client $client)
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "INSERT INTO projects VALUES (null,?,?,?,?,?,?)";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->bindValue(1, $project->getName());
        $this->stmt->bindValue(2, $project->getDescription());
        $this->stmt->bindValue(3, $project->getPrice());
        $this->stmt->bindValue(4, $project->getDeadline());
        $this->stmt->bindValue(5, $project->getStatus());
        $this->stmt->bindValue(6, $client->getId());
        $this->stmt->execute();
        $this->result = $this->stmt->rowCount();
        return $this->result;
    }

    public function getMyProjects(Client $client)
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "SELECT * FROM projects WHERE client_project=?";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->bindValue(1, $client->getId());
        $this->stmt->execute();
        $this->result = $this->stmt->fetchAll();
        return $this->result;
    }

    public function deleteProject(Project $project, Client $client)
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "DELETE FROM projects WHERE id=? AND client_project=?";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->bindValue(1, $project->getId());
        $this->stmt->bindValue(2, $client->getId());
        $this->stmt->execute();
        $this->result = $this->stmt->rowCount();
        return $this->result;
    }

    public function updateProjetc(Project $project)
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->openConnection();
        $this->query = "UPDATE projects SET description=?, price=?, deadline=? , status=? WHERE id=?";
        $this->stmt = $this->connection->prepare($this->query);
        $this->stmt->bindValue(1, $project->getDescription());
        $this->stmt->bindValue(2, $project->getPrice());
        $this->stmt->bindValue(3, $project->getDeadline());
        $this->stmt->bindValue(4, $project->getStatus());
        $this->stmt->bindValue(5, $project->getId());
        $this->stmt->execute();
        $this->result = $this->stmt->rowCount();
        return $this->result;
    }
}
