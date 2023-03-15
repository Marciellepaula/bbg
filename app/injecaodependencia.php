<?php

interface DatabaseConnectionInterface
{
    public function connect();
}

class DatabaseConnection implements DatabaseConnectionInterface
{
    protected $host;
    protected $username;
    protected $password;
    protected $database;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        // connect to the database using the provided credentials
    }
}

class UserRepository
{
    protected $db;

    public function __construct(DatabaseConnectionInterface $db)
    {
        $this->db = $db;
    }

    public function getUsers()
    {
        // use the $this->db instance to get the list of users from the database
    }
}

// criar uma instância do DatabaseConnection
$db = new DatabaseConnection('localhost', 'username', 'password', 'mydatabase');

// criar uma instância do UserRepository e injetar a instância do DatabaseConnection
$userRepository = new UserRepository($db);
