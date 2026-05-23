<?php

$nome = readline("Digite seu nome: ");

echo "Escolha o período do dia:" . "\n";
echo "[1] Manhã" . "\n";
echo "[2] Tarde" . "\n";
echo "[3] Noite" . "\n";

$opcao = readline("Opção: ");

$saudacao = "";
$valido = true;

switch ($opcao) {
    case "1":
        $saudacao = "Bom dia";
        break;
    case "2":
        $saudacao = "Boa tarde";
        break;
    case "3":
        $saudacao = "Boa noite";
        break;
    default:
        $saudacao = "";
        $valido = false;
        break;
}

if ($valido) {
    echo "\n" . $saudacao . ", " . $nome . "! Tenha um ótimo período!" . "\n";

    $horas = (float) readline("\nQuantas horas pretende trabalhar/estudar? ");
    $minutos = $horas * 60;

    echo "Você vai dedicar " . $horas . " horas (" . $minutos . " minutos) neste período." . "\n";
} else {
    echo "\n" . "Opção inválida! Digite 1, 2 ou 3." . "\n";
}
