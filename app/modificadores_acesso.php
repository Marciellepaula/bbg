<?php


class Veiculo
{
    protected $modelo;
    public $cor;


    public function Andar()
    {
        echo "Andou";
    }


    public function Parar()
    {
        echo "Parou";
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;  // acessando o atributo dentro do escopo da classe devido ao uso do protected
    }
}

class Carro extends Veiculo
{
    public function ligarlimpador()
    {
        echo "Limpando";
    }
}

class Moto extends Veiculo
{
    public function darGrau()
    {
        echo "Dando grau";
    }
}

$veiculo = new Veiculo();
$veiculo->setModelo("Gol1");
echo $veiculo->getModelo();

$carro = new Carro();
$carro->setModelo("Hillux");
echo $carro->getModelo();
