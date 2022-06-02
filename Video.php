<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    //metodos
    
    public function like() 
    {
        $this->setCurtidas($this->getCurtidas() + 1); // OU $this -> curtidas ++;
    }

    public function pause() 
    {
        $this->reproduzindo = false;
    }

    public function play() 
    {
        $this->reproduzindo = true;
    }
    //construtor
    
    public function __construct($titulo) 
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    
    
    //metodos especiais
    
    
    public function getTitulo() 
    {
        return $this->titulo;
    }

    public function getAvaliacao() 
    {
        return $this->avaliacao;
    }

    public function getViews() 
    {
        return $this->views;
    }

    public function getCurtidas() 
    {
        return $this->curtidas;
    }

    public function getReproduzindo() 
    {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void 
    {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void 
    {
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $avaliacao;
    }

    public function setViews($views): void 
    {
        $this->views = $views;
    }

    public function setCurtidas($curtidas): void 
    {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo): void 
    {
        $this->reproduzindo = $reproduzindo;
    }


    
    
}
