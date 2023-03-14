<?php

abstract class Banco
{

    protected $saldo;
    protected $limiteSaque;
    protected $juros;



    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }


    abstract protected function Depositar($saldo);
    abstract protected function Sacar($saldo);
}

class Itau extends Banco
{
    public function Depositar($d)
    {
        $this->saldo += $d;
    }
    public function Sacar($d)
    {
        $this->saldo -= $d;
    }
}

class Bradesco extends Banco
{

    public function Depositar($d)
    {
        $this->saldo += $d;
    }
    public function Sacar($d)
    {
        $this->saldo -= $d;
    }
}


$itau = new Itau();
$itau->setSaldo(1000);
echo "saldo " . $itau->getSaldo();
echo "depositar" . $itau->Depositar(200);
echo "saldo " . $itau->getSaldo();
