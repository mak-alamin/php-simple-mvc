<?php

class Database  
{
    private $dbHost = DB_HOST;
    private $dbName = DB_NAME;
    private $dbUser = DB_USER;
    private $dbPass = DB_USER_PASS;

    private $statement;
    private $dbHandler;

    
    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass);
            //echo 'Database connected successfully!';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
        $executed = $this->statement->execute();

        return $executed;
    }

    public function fetchData()
    {
        return $this->statement->fetchAll();
    }
}
