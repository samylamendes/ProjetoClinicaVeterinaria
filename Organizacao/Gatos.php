<?php 
require_once 'Organizacao\Animal.php';

 class Gatos extends Animal {
    protected $cor; 

    public function __constructor($nome,$especie,$idade,$tutor,$cor){
        parent::__construct($nome,$especie,$idade,$tutor);
        $this->cor = $cor;
    }

    public function getDescricao(){
        return parent::getDescricao() . "Cor:" . $this->cor . "\n";
    }

 }