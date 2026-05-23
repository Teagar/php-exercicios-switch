<?php

echo "=== CONVERSOR DE UNIDADES ===" . "\n";
echo "[1] Quilômetros -> Milhas" . "\n";
echo "[2] Celsius -> Fahrenheit" . "\n";
echo "[3] Quilos -> Libras" . "\n";
echo "[4] Metros -> Pés" . "\n\n";

$opcao = readline("Escolha uma opção (1-4): ");
$valor = readline("Digite o valor para converter: ");

$valorNumerico = (float) $valor;
$resultado = 0;
$unidadeOrigem = "";
$unidadeDestino = "";
$valido = true;

if (!is_numeric($valor) || $valorNumerico < 0) {
    echo "\n" . "Erro: Digite um valor numérico válido!" . "\n";
} else {
    switch ($opcao) {
        case "1":
            $resultado = $valorNumerico * 0.621371;
            $unidadeOrigem = "km";
            $unidadeDestino = "milhas";
            break;
        case "2":
            $resultado = ($valorNumerico * 9 / 5) + 32;
            $unidadeOrigem = "°C";
            $unidadeDestino = "°F";
            break;
        case "3":
            $resultado = $valorNumerico * 2.20462;
            $unidadeOrigem = "kg";
            $unidadeDestino = "libras";
            break;
        case "4":
            $resultado = $valorNumerico * 3.28084;
            $unidadeOrigem = "metros";
            $unidadeDestino = "pés";
            break;
        default:
            $valido = false;
            break;
    }

    if ($valido) {
        echo "\n" . $valorNumerico . " " . $unidadeOrigem . " equivale a " . round($resultado, 2) . " " . $unidadeDestino . "\n";
    } else {
        echo "\n" . "Opção inválida! Escolha entre 1 e 4." . "\n";
    }
}
