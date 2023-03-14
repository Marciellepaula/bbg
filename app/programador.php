<?php


class Programador extends Pessoa
{
    public $linguagem;

    public function __construct($tmpNome, $tpmLinguagem)
    {
        $this->nome = $tmpNome;
        $this->linguagem = $tpmLinguagem;
    }
}
