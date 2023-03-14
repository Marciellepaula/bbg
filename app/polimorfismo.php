<?php

class Animal
{
    public function Andar()
    {
        echo "O animal andou";
    }
}

class Cavalo extends Animal
{
    public function Andar()
    {
        echo "O cavalo andou";               //reescrever um metodo herdado da classe animal
    }
}

$animal = new Cavalo();
$animal->Andar();
