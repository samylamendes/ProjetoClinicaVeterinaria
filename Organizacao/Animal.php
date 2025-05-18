<?php
class Animal {
    protected $nome;
    protected $especie;
    protected $idade;
    protected $tutor;
    protected $vacina = [];

    public function __construct($nome,$especie,$idade,$tutor){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
        $this->tutor = $tutor;
    }

    public function getNome(){
        return $this->nome;
    }

    public function adicionarVacina($nova_vacina){
        $this->vacina[] = $nova_vacina;
        echo "Vacina " . $nova_vacina . " registrada na caderneta de "
        . $this->nome . "\n";
    }

    public function atualizarIdade($nova_idade){
        $this->idade = $nova_idade;
        echo "Idade atualizada: " . $this->idade . "\n";
    }

    public function getDescricao(){
        return "Animal:" . $this->nome . "\n" . 
        "Especie:" . $this->especie . "\n" . 
        "Idade:" . $this->idade . "\n" . 
        "Tutor:" . $this->tutor . "\n";
    }

     public function cadernetaVacina(){
         echo "Caderneta de vacinação de" . $this->nome . "\n";
         if(empty($this->vacina)){
            echo "Nenhuma vacina registrada.\n";
         } else {
            foreach($this->vacina as $historicoV){
                echo "--" . $historicoV . "\n";
            }
         }
        
        echo "\n";
    }

    function buscandoAnimalPorNome($nome, $animais){
        foreach ($animais as $animal){
            if(strtolower($animal->getNome() === strtolower($nome))){
              echo "Animal Encontrado";
              echo $animal->getDescricao();
            }

            if(method_exists($animal, 'mostrarCadernetaVacina')){
                $animal->cadernetaVacina();
            }
            return;
        }
        echo "Animal com " . $nome . "não encontrado.";
    
    }

}