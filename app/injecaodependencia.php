<?php
class DatabaseConnection
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
        // conecta ao banco de dados usando as credenciais fornecidas
    }
}

class UserRepository
{
    protected $db;

    public function __construct(DatabaseConnection $db)
    {
        $this->db = $db;
    }

    public function getUsers()
    {
        // usa a instância de $db para obter a lista de usuários do banco de dados
    }
}

// Cria uma instância de DatabaseConnection
$db = new DatabaseConnection('localhost', 'username', 'password', 'mydatabase');

// Cria uma instância de UserRepository e injeta a instância de DatabaseConnection
$userRepository = new UserRepository($db);
