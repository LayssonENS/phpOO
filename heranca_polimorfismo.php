<?php

//classe mae ou superclasse
class Felino{

    var $mamifero = 'sim';

    function correr(){
        echo 'Correr como felino'.  '<br>';
    }

}

//classe filha ou subclasse
class Chita extends Felino{

    //Polimorfirmos, sobscreve a função da superclasse
    function correr(){
        echo 'Correr como chita 100kmh'.  '<br>';
    }
}


$chita = new Chita();
$felino = new Felino();

echo $chita->mamifero . '<br>';
$chita->correr();

echo $felino->mamifero . '<br>';
$felino->correr();
?>