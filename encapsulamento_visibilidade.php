<?php

class Veiculo
{
    /*
    public pode ser alterado 
    private só pode ser alterado dentro da classe
    protected, podemos fazer extend
    */

    private $placa;
    private $cor;
    protected $tipo='Caminhonete';

    public function setPlaca($parametro_placa){
        
        //Validação da placa
        $this->placa = $parametro_placa;
    }
   
    public function getPlaca(){
        return $this->placa;
    }
}

class Carro extends Veiculo{

    public function exibirTipo(){
        echo $this->tipo;
    }

}

$veiculo = new Veiculo();
$carro = new Carro();


$veiculo->setPlaca('ASDAS55');
echo $veiculo->getPlaca();


$carro->exibirTipo();




?>