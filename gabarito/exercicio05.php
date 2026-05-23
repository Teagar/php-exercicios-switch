<?php

echo "=== GERADOR DE ORÇAMENTO ===" . "\n\n";

$cliente = readline("Nome do cliente: ");
$servico = readline("Serviço: ");
$horas = (float) readline("Quantidade de horas: ");
$valorHora = (float) readline("Valor por hora (R$): ");

echo "\n" . "Tipo de cliente:" . "\n";
echo "[1] Cliente novo (sem desconto)" . "\n";
echo "[2] Cliente recorrente (10% de desconto)" . "\n";
echo "[3] Cliente VIP (20% de desconto)" . "\n";

$opcao = readline("Opção: ");

$desconto = 0;
$tipoValido = true;

switch ($opcao) {
    case "1":
        $desconto = 0;
        break;
    case "2":
        $desconto = 10;
        break;
    case "3":
        $desconto = 20;
        break;
    default:
        $tipoValido = false;
        break;
}

if ($tipoValido) {
    if ($horas > 0 && $valorHora > 0) {
        $subtotal = $horas * $valorHora;
        $valorDesconto = $subtotal * ($desconto / 100);
        $total = $subtotal - $valorDesconto;

        echo "\n";
        echo "================================" . "\n";
        echo "        ORÇAMENTO" . "\n";
        echo "================================" . "\n";
        echo "Cliente: " . $cliente . "\n";
        echo "Serviço: " . $servico . "\n";
        echo "Horas: " . $horas . "\n";
        echo "Valor/hora: R$ " . number_format($valorHora, 2, '.', '') . "\n";
        echo "Subtotal: R$ " . number_format($subtotal, 2, '.', '') . "\n";
        echo "Desconto (" . $desconto . "%): - R$ " . number_format($valorDesconto, 2, '.', '') . "\n";
        echo "================================" . "\n";
        echo "TOTAL FINAL: R$ " . number_format($total, 2, '.', '') . "\n";
        echo "================================" . "\n";
    } else {
        echo "\n" . "Erro: Horas e valor devem ser maiores que zero!" . "\n";
    }
} else {
    echo "\n" . "Tipo de cliente inválido! Escolha entre 1 e 3." . "\n";
}
