<?php

require_once 'Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rouds;
    private $aprovado;       

    //Metodos publicos 
       
    //Metodos Especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRouds() {
        return $this->rouds;
    }

    function getAprovado() {
        return $this->aprovado;
    }

    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    function setRouds($rouds){
        $this->rouds = $rouds;
    }

    function setAprovado($aprovado){
        $this->aprovado = $aprovado;
    }

    public function marcarLuta($l1,$l2) {
        if($l1->getCategoria() === $l2->getCategoria()
                && ($l1 != $l2)) {
            $this->aprovado= true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovado= false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovado){
         $vencedor = rand(0,2);
            switch ($vencedor){
                case 0 : //empate
                     echo "<p>!EMPATE!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    echo '<p>Empataram a luta</p>';
                    break;
                    case 1: //GAnhou Desafiado
                    echo '<p>O desafiado '.$this->desafiado->getNome().'  venceu a luta</p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                    case 2: 
                    echo '<p>O desafiante  '.$this->desafiante->getNome().'  venceu a luta</p>';
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break; } } else {
     echo '<p>No puede</p>';
 }

    

}

}

