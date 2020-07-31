<?php

/**
 * Description of Caneta
 *
 * @author lucas
 */
class Caneta {
    //put your code here
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar() {
        if ($this-> tampada == true ) {
            echo "<p>não posso rabiscar</p>";
        }else {
            echo "<p>Estou rabiscando</p>";
        }
    }
    public function  tampar() {
        $this-> tampada = true;
         
    }
    public function  destampar() {
        $this-> tampada = false;
    }
    
}
