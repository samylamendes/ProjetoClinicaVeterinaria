<?php
require_once 'Organizacao/Animal.php';
require_once 'Organizacao/Atendimento.php';
require_once 'Organizacao/Gatos.php';
require_once 'Organizacao/Veterinarios.php';

// verificacao vet 
$veterinario = new Veterinario("Dr. Carlos", "12345-SP");
$veterinario = new Veterinario("Dra. Ana", "45678-SP");

$veterinario->setDisponibilidade("Segunda-feira", "08:00 - 12:00");
$veterinario->setDisponibilidade("Quarta-feira", "13:00 - 17:00");
$veterinario->setDisponibilidade("Sexta-feira", "09:00 - 12:00");

echo $veterinario->getDescricao();
$veterinario->mostrarDisponibilidade();

// adicionar animais: 
$animal1 = new Gatos("Mabel", "SRD", 2, "Geovana", "Listrada");
$animal2 = new Gatos("Mimi", "SRD", 4, "Maria", "Branco");
$animal2->atualizarIdade(12);
$animal2->adicionarVacina("Fiv-2");


// atendimento

$atendimento1 = new Atendimento($animal1, $veterinario, "2025-05-18", "Vacina antirrábica aplicada.");
$atendimento2 = new Atendimento($animal2, $veterinario, "2025-05-18", "Exame clínico completo.");

$atendimento1->exibirAtendimento();
$atendimento2->exibirAtendimento();
