<?php

    class Pessoa
    {
        private $nome;

        public function correr(){
            echo $this->nome . "Correndo <br>";
        }

        function __construct($parametro_nome)
        {
            echo "Construtor Iniciado <br>";
            $this->nome = $parametro_nome;
        }

        function __destruct()
        {
            echo"Objeto removido";
        }
    }
    
$pessoa = new Pessoa('Laysson ');
$pessoa -> correr();

?>