<?php

require_once './Controlador.php';


class ControleRemoto implements Controlador {
         
//atributos
    private $volume;
    private $ligado;
    private $tocando;
    
//Métodos Especiais
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
        
    }
    
    private  function  getVolume() {
        return $this->volume;
    }
    
    private function setVolume($vlm) {
        $this->volume = $vlm;
    }
    
    private function getLigado() {
        return $this->ligado;
    }
    
    private function setLigado($lgd) {
        $this->ligado  = $lgd;
    }
    
    public function getTocando() {
        return $this->tocando;
    }
    
    public function setTocando($tcmd) {
        $this->tocando = $tcmd;
    }
    
    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }
    
    public function abrirMenu() {
        echo'<p>-----MENU-----</p>';
        echo '<br>Está ligado'.($this->getLigado()?"Sim":"Não");
        echo '<br>Está tocando? '.($this->getTocando()?"Sim":"Não");
        echo '<br>Volume: '.$this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo '|';            
        }
        echo '<br>';        
        echo'<p>-----FIM-----</p>';
    }
    
    public function fecharMenu() {
        echo '<br>Fechando menu...';        
    }
    
    public function ligarMudo() {
        if ($this->getLigado() && $this-> getVolume() > 0) {
            $this->setVolume(0);
        }
      
    }
    
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }  

    public function maisVolume() {
          if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo '<p>Erro! Não posso aumentar o volume!</p>';
        }
        
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        } else{
            echo '<p>Erro! Não posso dominuir o volume!</p>';
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
            
    }
    
    public function pausar() {
        if ($this->getLigado() && ($this->getTocando())) {
            $this->setTocando(false);
        }
        
    }

}
