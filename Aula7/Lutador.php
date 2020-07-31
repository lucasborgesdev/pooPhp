<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrota;
    private $empate;
    
   public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
       $this->nome = $no;
       $this->nacionalidade = $na;
       $this->idade = $id;
       $this->altura = $al;
       $this->setPeso($pe);
       $this->vitoria = $vi;
       $this->derrota = $de;
       $this->empate = $em;
   }    
   
   function getNome() {
       return $this->nome;
   }

   function getNacionalidade() {
       return $this->nacionalidade;
   }

   function getIdade() {
       return $this->idade;
   }

   function getAltura() {
       return $this->altura;
   }

   function getPeso() {
       return $this->peso;
   }

   function getCategoria() {
       return $this->categoria;
   }

   function getVitoria() {
       return $this->vitoria;
   }

   function getDerrota() {
       return $this->derrota;
   }

   function getEmpate() {
       return $this->empate;
   }

   function setNome($nome): void {
       $this->nome = $nome;
   }

   function setNacionalidade($nacionalidade): void {
       $this->nacionalidade = $nacionalidade;
   }

   function setIdade($idade): void {
       $this->idade = $idade;
   }

   function setAltura($altura): void {
       $this->altura = $altura;
   }

   function setPeso($peso) {
       $this->peso = $peso;
       $this->setCategoria();
   }

   private function setCategoria() {
       
       if($this->peso <52.2) {
            $this->categoria = "Inválido";
       } elseif ($this->peso <=70.3) {
            $this->categoria = "Leve ";
       } elseif ($this->peso <=83.9) {
            $this->categoria = "Médio ";
       } elseif ($this->peso <= 120.0) {
            $this->categoria = "Pesado ";
       } else {
            $this->categoria = "Inválido ";    
       }
   }

   function setVitoria($vitoria) {
       $this->vitoria = $vitoria;
   }

   function setDerrota($derrota): void {
       $this->derrota = $derrota;
   }

   function setEmpate($empate): void {
       $this->empate = $empate;
   }
   
   function ganharLuta() {
       $this->setVitoria($this->getVitoria() +1);
   }
   function perderLuta() {
       $this->setDerrota($this->getDerrota() +1);
   }
   function empatarLuta() {
       $this->setEmpate($this->getEmpate() +1);
   }
   
   public function apresentar() {
       
       echo '<p>--------------------</p>';
       echo 'O Lutador: '.$this->getNome();
       echo ' de origem: '.$this->getNacionalidade();
       echo ' tem '.$this->getIdade().' anos. ';
       echo 'com '.$this->getAltura().'m de altura';
       echo 'Pesando '.$this->getPeso().'Kg';
       echo ' Ganhou '.$this->getVitoria().' lutas';
       echo ' Perdeu '.$this->getDerrota().' lutas';;
       echo ' Empatou '.$this->getEmpate().' lutas';;
       echo '<p>--------------------</p><br>';
       
   }
   
   public function status() {       
       
       echo '<p>--------------------</p>';
       echo '<p>'.$this->getNome().' é um peso '.$this->getCategoria();
       echo 'e já ganhou '. $this->getVitoria().' vezes';
       echo ' perdeu '. $this->getDerrota().' vezes';
       echo ' empatou '. $this->getEmpate().' vezes.';
       echo '<p>--------------------</p><br>';
   }


}
