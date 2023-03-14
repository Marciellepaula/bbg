<?php

trait Authenticatable
{
    protected $user;
    protected $email;
    protected $password;


    public function login($email, $password)
    {
        // Lógica para verificar as credenciais do usuário e fazer o login
        // ...
        $this->email = $email;
        $this->password = $password;
    }

    public function logout()
    {
        // Lógica para fazer o logout do usuário
        // ...
        $this->user = null;
    }

    public function isLoggedIn()
    {
        return $this->user != null;
    }
}

class User
{
    use Authenticatable;

    // Propriedades e métodos específicos do modelo User
}

class AuthController
{
    use Authenticatable;

    // Métodos para lidar com a autenticação de usuários no controlador AuthController
}

// Criando um objeto da classe User
$user = new User();

// Fazendo o login do usuário
$user->login('user@example.com', 'senha123');

// Verificando se o usuário está logado
if ($user->isLoggedIn()) {
    echo "O usuário está logado.\n";
}

// Fazendo o logout do usuário
$user->logout();
