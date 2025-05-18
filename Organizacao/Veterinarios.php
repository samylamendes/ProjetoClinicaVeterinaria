<?php
class Veterinario {
    private $nome;
    private $Crmv;
    public $disponibilidade = [];

public function __construct($nome, $crmv) {
        $this->nome = $nome;
        $this->Crmv = $crmv;
    }

  public function getDescricao(){
     return "Veterinario:" . $this->nome . "(CRMV): " . $this->Crmv . "\n";
  }

  public function setDisponibilidade($dia, $horario){
     $this->disponibilidade[$dia] = $horario;
  }

  public function mostrarDisponibilidade(){
    echo "Disponibilidade do medico(a) veterinário(a):\n";
    if(empty($this->disponibilidade)){
        echo "Sem horarios Cadastrados";
    }
    else {
        foreach($this->disponibilidade as $dia => $horario){
            echo "-" .  $dia . "-" . $horario;
        }
    }
    echo "\n";  
}

}