<?php
// 1.	Escreva um algoritmo que leia um número e mostre seu inteiro.

$num = 3.5;

echo intval($num);

// 2.	Faça um algoritmo que leia o nome e as idades de duas pessoas e mostre a soma das idades.


$nome1 = 'Fulano1';
$idade1 = 30;
$nome2 = 'Fulano2';
$idade2 = 20;
$somaIdade = $idade1 + $idade2;

echo $somaIdade;

/* 3.	Repita o exercício anterior, porém, mostrando a frase abaixo, substituindo as lacunas pelas informações obtidas no sistema.  
A soma das idades de XXXXX e XXXXX é XXXXX
onde cada XXXXX corresponde aos nomes e a soma das idades.*/

$nome1 = 'Fulano1';
$idade1 = 30;
$nome2 = 'Fulano2';
$idade2 = 20;
$somaIdade = $idade1 + $idade2;

echo "A soma das idades de $nome1 e $nome2 é $somaIdade";

/*4.	Escreva um algoritmo que leia dois números que deverão ser colocados, respectivamente, 
nas variáveis VA e VB. O algoritmo deve, então, trocar os valores de VA por VB e vice-versa e mostrar o conteúdo destas variáveis. */

$VA = 'valor_A';
$VB = 'valor_B';


$novoVA = $VB;
$novoVB = $VA;

$VA = $novoVA;
$VB = $novoVB;


echo $VA;
echo $VB;

/* 5.	Faça um algoritmo que leia valores para as variáveis A, B e C e mostre o resultado da seguinte expressão:
( A – B ) * C */

$numA = '20';
$numB = '10';
$numC= '2';

echo ($numA-$numB)*$numC;



/*6.	Escrever um algoritmo para ler uma temperatura em Fahrenheit e apresentá-la convertida em graus Centígrados.
	                           (Fahrenheit – 32) x 5
Fórmula:	Centígrados = 	----------------------------
                                         9                  */
                                         

$fahrenheit ='86';

$centigrado = (($fahrenheit - 32)*5)/9;

echo $centigrado;

/*7.	Maria quer saber quantos litros de gasolina precisa colocar em seu carro e quanto vai gastar para fazer uma viagem até a casa de sua irmã.
Dados extras:
-	Distância da casa de Maria até sua irmã : 520 km
-	Seu carro consome 12 litros de gasolina por Km/rodado.
-	Ela abastece sempre no mesmo posto, onde o preço da gasolina é R$ 1,50 o litro.
*/

$distancia = 520;
$consumoCarro = 12;
$litrosGasolina = $distancia / $consumoCarro;
$custoGasolina = $litrosGasolina * 1.5;

echo "$litrosGasolina litros e R$ $custoGasolina";

// 8.	Escreva um algoritmo para ler um valor inteiro em segundos, e depois converter e mostrá-lo no formato hh:mm:ss.

$segundos = 1800;
echo gmdate("H:i:s", $segundos);






