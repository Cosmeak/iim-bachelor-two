<?php

class Database
{
    private PDO $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=spa;port=3306', 'root', '');
        }
        catch (Exception $error) {
            die ("Error :".$error->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}