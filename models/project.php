<?php
include_once("connection.php");
include_once("admin.php");

class Project
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $deadline;
    private $status;
    private $clientProject;

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

    public function setDeadline()
    {
        $this->deadline = date("Y:m:d");
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
}
