<?php
class Atendimento{
    private $animal;
    private $veterinario;
    private $data;
    private $descricao;

    public function __construct($animal, $veterinario, $data, $descricao) {
        $this->animal = $animal;
        $this->veterinario = $veterinario;
        $this->data = $data;
        $this->descricao = $descricao;
    }

    public function exibirAtendimento() {
        echo "=== Atendimento ===\n";
        echo $this->animal->getDescricao();
        echo $this->veterinario->getDescricao();
        echo "Data: $this->data\n";
        echo "Descrição: $this->descricao\n";
        echo "====================\n\n";
    }
}
