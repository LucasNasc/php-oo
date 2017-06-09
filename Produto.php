<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 09/06/2017
 * Time: 01:38
 */
class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;


    public function  baixaEstoque(){

        $this->estoque = $this ->estoque - 1;
    }


}