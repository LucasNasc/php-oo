<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 09/06/2017
 * Time: 01:46
 */

require_once  "pessoa.php";

$pessoa1 = new Pessoa("Lucas", "20");
$pessoa2 = new Pessoa("lala","30");

echo $pessoa1->correr(50);

require_once "Produto.php";
require_once "Tenis.php";

$produto1 = new Tenis();
if($tenis instanceof Produto){
    echo "é um tipo de Tenis";
}else {
    echo "Não é um tipo de Tenis";
}

