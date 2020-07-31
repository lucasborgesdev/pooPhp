<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Celular
 *
 * @author lucas
 */
class Celular {
    //put your code here
    var $marca;
    var $modelo;
    var $tamanhoDaTela;
    var $cargaDaBateria;
    var $tocando;
    
    function licacao() {
       $this->tocando = true;
    }
    function  desligarLigacao() {
         $this->tocando = false;
    }
    function tocando() {
        if($this->tocando == true) {
            echo"<p>bizzzzzzzzzzzzzzzzzzz</p></br>";
        } else {
            echo"<p>Não esta tocando</p></br>";
        }
    }
    
    
}
