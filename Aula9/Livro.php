<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';


class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
     
    public function detalhes() {
        echo 'Livro'.$this->titulo.' escritor por '.$this->autor;
        echo '<br> total de Paginas '.$this->totPaginas.' pagina atual '.$this->pagAtual;
        echo '<br> Sendo lido por '.$this->leitor->getNome();
    }
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto= false;
        $this->pagAtual = 0;
        
    }

    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getAutPaginas() {
        return $this->autPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function setAutor($autor){
        $this->autor = $autor;
    }

    function setAutPaginas($autPaginas){
        $this->autPaginas = $autPaginas;
    }

    function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto){
        $this->aberto = $aberto;
    }

    function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }      
        
    }

    public function voltarPag() {
         $this->pagAtual --;
    }

}
