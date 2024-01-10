<?php

namespace Php2\Oop\Model;

use PDO;
use PDOException;

class Database
{
    private $host_name = "localhost";
    private $database = "Lab1";
    private $username = "root";
    private $password = "mysql";
    private $dbo;

    public function __construct()
    {
        try {
            $this->dbo = new PDO('mysql:host=' . $this->host_name . ';dbname=' . $this->database, $this->username, $this->password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getDatabaseConnection()
    {
        echo "Database";
        return $this->dbo;
    }

    public function someDatabaseOperation()
    {
       
    }
}

