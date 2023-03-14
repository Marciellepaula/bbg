<?php

class Login
{
    public static $user;

    public static function verificaLogin()
    {
        echo "usuario esta logado" . self::$user;                              // $this->user não funciona aqui
    }

    public function sairSistema()
    {
        echo "Usuario sair do sistema";
    }
}

Login::$user = "admin";
Login::verificaLogin(); // Não precisa instanciar pois o metodo usado é static

$login = new Login();
$login->sairSistema();
