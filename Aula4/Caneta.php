<?php

/**
 * Description of Caneta
 *
 * @author lucas
 */
class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    
    public function __construct($m, $c, $p) { //Método Construtor
       $this->modelo = $m;
       $this->cor = $c;
       $this->ponta = $p;
       $this->tampar();
    }
    
    public function tampar() {
        echo '<script>alert("Caneta tampada")</script>';
        return $this->tampada = true;
    }
    public function desTampar() {
        echo '<script>alert("Caneta destampada")</script>';
        return $this->tampada = false;
    }    
    
    public function getModelo() {
      return $this -> modelo;
    }
    
    public function setModelo($m) {
        $this->modelo = $m;
    }
    
    public function getPonta() {
        return $this -> ponta;
    }
    
    public function setPonta($p) {
        $this -> ponta = $p;        
    }
    
}
