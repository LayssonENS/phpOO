<?php

class Veiculo
{
    /*
    public pode ser alterado 
    private só pode ser alterado dentro da classe
    protected 
    */

    public $placa;
    private $cor;
    protected $tipo;

    
}

$veiculo = new Veiculo();
echo $veiculo->placa = 'ASDAS55';




?>