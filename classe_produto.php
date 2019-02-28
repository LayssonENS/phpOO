<?php

class Produto
{
    //Atributos
    var $nome;
    var $preco;
    var $quantidade;

    //metodo getters e setter
    function setNome($nome_definido)
    {
        $this->nome = $nome_definido;
    }

    function getNome()
    {
        return $this->nome;
    }

    //PREÇO
    function setPreco($preco_definido)
    {
        $this->preco = $preco_definido;
    }

    function getPreco()
    {
        return
        $this->preco;
    }

    //QUANTIDADE
    function setQuantidade($quantidade_definida)
    {
        $this->quantidade = $quantidade_definida;
    }

    function getQuantidade()
    {
        return
        $this->quantidade;
    }

}

$produto = new Produto();

$produto->setNome('Computador');
$produto->setPreco(1200);
$produto->setQuantidade(10);

echo $produto->getNome()  .'<br>';
echo $produto->getPreco() .'<br>';
echo $produto->getQuantidade() .'<br>';

?>