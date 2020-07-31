<?php
/**
 * Description of Caneta
 *
 * @author lucas
 */

class Caneta {
    //put your code here
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {
        if ($this->tampada == true ) {
            echo "<p>não posso rabiscar</p>";
        }else {
            echo "<p>Estou rabiscando</p>";
        }
    }
    function  tampar() {
        $this->tampada = true;
         
    }
    function  destampar() {
        $this->tampada = false;
    }
}
