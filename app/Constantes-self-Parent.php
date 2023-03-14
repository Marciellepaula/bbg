<?php


class Pessoa
{
    const nome = "Rodigo";

    public function exibirNome()
    {
        echo self::nome;
    }
}


class Rodrigo extends Pessoa
{
    const nome = "Sousa";

    public function exibirNome()
    {
        echo self::nome;  // se referindo ao escopo da classe 
    }
}

class Rodrigo1 extends Pessoa
{
    const nome = "Sousa";

    public function exibirNome()
    {
        echo parent::nome;  // referenciar a constante da classe pai
    }
}

$pessoa = new Rodrigo1();
$pessoa->exibirNome();
