<?php
/**
 * =============================================
 * EXERCÍCIO 05 - Gerador de Orçamento com Desconto
 * =============================================
 * 
 * INSTRUÇÕES:
 * 1. Peça o NOME DO CLIENTE usando readline()
 * 2. Peça o NOME DO SERVIÇO usando readline()
 * 3. Peça a QUANTIDADE DE HORAS do serviço usando readline()
 * 4. Peça o VALOR POR HORA usando readline()
 * 5. Exiba o menu de TIPO DE CLIENTE:
 *    [1] Cliente novo (sem desconto)
 *    [2] Cliente recorrente (10% de desconto)
 *    [3] Cliente VIP (20% de desconto)
 * 6. Peça a opção usando readline()
 * 7. Use SWITCH para definir a porcentagem de desconto:
 *    - case "1": desconto = 0
 *    - case "2": desconto = 10
 *    - case "3": desconto = 20
 *    - default: "Tipo de cliente inválido!"
 * 8. Use IF/ELSE para verificar se horas e valor são maiores que zero:
 *    - Se não: "Erro: Horas e valor devem ser maiores que zero!"
 *    - Se sim: prossiga com o cálculo
 * 9. CÁLCULOS (operações aritméticas):
 *    - subtotal = horas * valorPorHora
 *    - valorDesconto = subtotal * (desconto / 100)
 *    - total = subtotal - valorDesconto
 * 10. Use CONCATENAÇÃO para montar o orçamento completo:
 * 
 * CONCEITOS: readline, switch, if/else, concatenação, operações aritméticas
 * 
 * EXEMPLO DE SAÍDA:
 * ---
 * === GERADOR DE ORÇAMENTO ===
 * 
 * Nome do cliente: Pedro Souza
 * Serviço: Desenvolvimento de Website
 * Quantidade de horas: 40
 * Valor por hora (R$): 75
 * 
 * Tipo de cliente:
 * [1] Cliente novo (sem desconto)
 * [2] Cliente recorrente (10% de desconto)
 * [3] Cliente VIP (20% de desconto)
 * Opção: 3
 * 
 * ================================
 *         ORÇAMENTO
 * ================================
 * Cliente: Pedro Souza
 * Serviço: Desenvolvimento de Website
 * Horas: 40
 * Valor/hora: R$ 75.00
 * Subtotal: R$ 3000.00
 * Desconto (20%): - R$ 600.00
 * ================================
 * TOTAL FINAL: R$ 2400.00
 * ================================
 * ---
 */

// Escreva seu código aqui:
