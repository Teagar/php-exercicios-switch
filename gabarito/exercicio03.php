<?php

echo "=== LANCHONETE PHP ===" . "\n\n";

$cliente = readline("Digite seu nome: ");

echo "\n" . "--- CARDÁPIO ---" . "\n";
echo "[1] X-Burger — R$ 18.50" . "\n";
echo "[2] X-Salada — R$ 20.00" . "\n";
echo "[3] X-Bacon  — R$ 22.50" . "\n";
echo "[4] X-Tudo   — R$ 28.00" . "\n\n";

$escolha = readline("Escolha o lanche (1-4): ");
$quantidade = (int) readline("Quantidade: ");

$nomeLanche = "";
$preco = 0;
$valido = true;

switch ($escolha) {
    case "1":
        $nomeLanche = "X-Burger";
        $preco = 18.50;
        break;
    case "2":
        $nomeLanche = "X-Salada";
        $preco = 20.00;
        break;
    case "3":
        $nomeLanche = "X-Bacon";
        $preco = 22.50;
        break;
    case "4":
        $nomeLanche = "X-Tudo";
        $preco = 28.00;
        break;
    default:
        $valido = false;
        break;
}

if ($valido) {
    if ($quantidade > 0) {
        $total = $quantidade * $preco;

        echo "\n" . "=== PEDIDO ===" . "\n";
        echo "Cliente: " . $cliente . "\n";
        echo "Lanche: " . $nomeLanche . "\n";
        echo "Quantidade: " . $quantidade . "\n";
        echo "Preço unitário: R$ " . number_format($preco, 2, '.', '') . "\n";
        echo "TOTAL: R$ " . number_format($total, 2, '.', '') . "\n";
        echo "===============" . "\n";
    } else {
        echo "\n" . "Erro: A quantidade deve ser maior que zero!" . "\n";
    }
} else {
    echo "\n" . "Lanche inválido! Escolha entre 1 e 4." . "\n";
}
