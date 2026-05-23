<?php
/**
 * =============================================
 * EXERCÍCIO 02 - Calculadora com Validação
 * =============================================
 * 
 * INSTRUÇÕES:
 * 1. Peça ao usuário para digitar o PRIMEIRO número usando readline()
 * 2. Peça ao usuário para digitar o SEGUNDO número usando readline()
 * 3. Exiba o menu de operações:
 *    [1] Soma (+)
 *    [2] Subtração (-)
 *    [3] Multiplicação (*)
 *    [4] Divisão (/)
 * 4. Peça ao usuário para ESCOLHER a operação (1, 2, 3 ou 4) usando readline()
 * 5. Use um SWITCH para realizar o cálculo correspondente:
 *    - case "1": soma
 *    - case "2": subtração
 *    - case "3": multiplicação
 *    - case "4": divisão
 *    - default: "Operação inválida!"
 * 6. No case "4" (divisão), use IF/ELSE:
 *    - Se o segundo número for zero: "Erro: Não é possível dividir por zero!"
 *    - Senão: realize a divisão normalmente
 * 7. Use CONCATENAÇÃO para exibir:
 *    "[NUM1] [SÍMBOLO] [NUM2] = [RESULTADO]"
 * 
 * CONCEITOS: readline, switch, if/else, concatenação, operações aritméticas
 * 
 * EXEMPLO DE SAÍDA (sucesso):
 * ---
 * === CALCULADORA ===
 * Digite o primeiro número: 15
 * Digite o segundo número: 4
 * 
 * Escolha a operação:
 * [1] Soma (+)
 * [2] Subtração (-)
 * [3] Multiplicação (*)
 * [4] Divisão (/)
 * Opção: 3
 * 
 * 15 * 4 = 60
 * ---
 * 
 * EXEMPLO DE SAÍDA (erro):
 * ---
 * === CALCULADORA ===
 * Digite o primeiro número: 10
 * Digite o segundo número: 0
 * 
 * Escolha a operação:
 * [1] Soma (+)
 * [2] Subtração (-)
 * [3] Multiplicação (*)
 * [4] Divisão (/)
 * Opção: 4
 * 
 * Erro: Não é possível dividir por zero!
 * ---
 */

// Escreva seu código aqui:
