<?php

echo "=== CALCULADORA ===" . "\n";

$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

echo "\n" . "Escolha a operação:" . "\n";
echo "[1] Soma (+)" . "\n";
echo "[2] Subtração (-)" . "\n";
echo "[3] Multiplicação (*)" . "\n";
echo "[4] Divisão (/)" . "\n";

$opcao = readline("Opção: ");

$resultado = 0;
$simbolo = "";
$erro = false;

switch ($opcao) {
    case "1" || "+":
        $resultado = $num1 + $num2;
        $simbolo = "+";
        break;
    case "2" || "-":
        $resultado = $num1 - $num2;
        $simbolo = "-";
        break;
    case "3" || "*":
        $resultado = $num1 * $num2;
        $simbolo = "*";
        break;
    case "4" || "/":
        $simbolo = "/";
        if ($num2 == 0) {
            $erro = true;
        } else {
            $resultado = $num1 / $num2;
        }
        break;
    default:
        $erro = true;
        $simbolo = "?";
        break;
}

if ($erro) {
    if ($simbolo == "/") {
        echo "\n" . "Erro: Não é possível dividir por zero!" . "\n";
    } else {
        echo "\n" . "Operação inválida! Escolha entre 1 e 4." . "\n";
    }
} else {
    echo "\n" . $num1 . " " . $simbolo . " " . $num2 . " = " . $resultado . "\n";
}
