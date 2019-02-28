<?php

class Pessoa
{
    //Atributos
    var $nome;

    //metodo getters e setter
    function setNome($nome_definido){
        $this->nome = $nome_definido;
    }

    function getNome(){
        return $this->nome;
    }

}

$pessoa = new Pessoa();

$pessoa->setNome('Laysson');
echo $pessoa -> getNome();

?>