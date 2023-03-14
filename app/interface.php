<?php

interface Crud
{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticia implements Crud  // Essa classe irá criar a lógica desses metodos pois está implementando Crud um contrato então é obrigado a usar  todos esses metods public e
{

    public function create()
    {
    }
    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
