
<?php

class caneta{
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;


    public function Caneta($m, $c, $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    /*public function __construct(){
        $this->cor = "Azul"; //constroi ja a caneta
        $this->tampar(); 
    }*/
    public function tampar(){
        $this->tampada = true;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}
