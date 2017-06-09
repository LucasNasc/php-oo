<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 25/05/2017
 * Time: 21:09
 */
class Pessoa {

    public $nome ;
    public $idade;

    public function correr ($km){

        echo $this->nome." está Correndo";
        for ($i = 0 ; $km >$i; $i++){
            echo ".";

        }
        echo $this->nome." Terminou de Correr"
    }
}

$pessoa1 = new Pessoa();

$pessoa1->nome ="lucas";
$pessoa1->idade = "18";

$pessoa2 = new Pessoa();

$pessoa2->nome = "Nascimento";
$pessoa2->idade = "29";

echo $pessoa1->correr();