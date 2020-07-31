<?php

/**
 * Description of ContaBanco
 *
 * @author lucas
 */

// echo"<p></p>"
class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;    
   
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->status = true;
        if($t == "CC"){
            $this->setSaldo(50);
        } elseif ($t == "CP") {
              $this->setSaldo(150);  
        }
    }
    
    public function fecharConta() {
        if($this->getSaldo() > 0 ){
             echo'<p>conta com dinheiro,não pode fechar</p>';
        } elseif ($this->getSaldo() < 0) {
             echo'<p>conta em débito,impossivel encerrar</p>';
        } else {
            $this->status = false;
             echo'<p>conta da: '.$this->getDono().' encerrada com sucesso</p>';
        }         
    }
    
    public function depositar($v) {
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo"<p>Deposito de R$$v na conta de: ".$this->getDono()." saldo todal de:".$this->getSaldo()."</p>";
        } else {
            echo'<p>conta fechada</p>';
        }
    }
    
    public function sacar($v) {
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                //$this->saldo = saldo - $v;    
                $this->setSaldo($this->getSaldo() - $v);
                echo"<p>Saque de R$$v autorizado com sucesso da conta de ".$this->getDono()."</p>";
            } else {
                echo'<p>impossivel sacar, saldo insuficiente</p>';
            }      
        } else {
           echo'<p>Não posso sacar de uma conta fechada</p>'; 
        }
    }
    
    public function pagarMensal() {
        $va = 0;
        if($this->getTipo() == "CC"){
            $va = 12;
        } elseif ($this->getTipo() == "CP") {
            $va = 20;  
        }
        if($this->getStatus() == true){
            if($this->saldo > $va){
                $this->setSaldo($this->getSaldo() - $va);
                echo"<p>Mensalidade de $va debitada na conta de: ".$this->getDono()."</p>";
            } else {
                echo"SAlDO INSUFICIENTE";
            }
        } else {
            echo"IMPOSSIVEL PAGAR";
        }
    }
    
     public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }
     public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($nc) {
        $this->numConta = $nc;
    }
    
    public function getTipo() {
        return $this -> tipo;
    }
    
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getSaldo() {
        echo '<p>Saldo de: '.$this->saldo.'</p>';
        return $this->saldo;
        
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    
    public function getStatus() {
        return $this->status;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getDono() {
        return $this->dono;
        
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    
    
    
}
