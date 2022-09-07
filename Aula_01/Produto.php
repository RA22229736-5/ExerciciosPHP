<?php
/*

-classe 
- instancias dos objetos

PSR

*/

class Produto
{
   public $produtoID;
    public $produtoNome;
    public $preco;   


    public function setNome($nomeP){//metodos acessores
        $this->nome = $nomeP;
    }

    public function getNome(){
        return $this->nome;
    }

    //implementar os métodos setar e resgatar o código e preço.
}