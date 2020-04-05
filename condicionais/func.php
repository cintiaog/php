<?php

function numeroInteiro($valor=0){
    $valor = (int)$valor;

    if (is_int($valor)){
        echo "Você digitou $valor:<BR> É um numero inteiro";
    }else{
        echo "$valor não é um número inteiro";
    }

}      

function vericacaoRange09($valor=0){
    $valor = (int)$valor;

    if($valor >= 0 && $valor <= 9){
        echo " e está no range de 0 a 9!";
    }else{
        echo " mas não está no range de 0 a 9!";
    }
}

function numeroNegativo($valor=0){
    $valor = (int)$valor;

    if ($valor < 0 ){
        echo ", negativo";
    }else{
        echo ", positivo";
    }
}

function vericacaoRange0100($valor=0){
    $valor = (int)$valor;

    if($valor >= 0 && $valor <= 100){
        echo " e está no range de 0 a 100!";
    }else if ($valor >100){
        echo " mas é maior que 100!";
    }else{
        echo " mas não está no range de 0 a 100!";
    }
}

function parImpar($valor=0){
    $valor = (int)$valor;

    if ($valor % 2 == 0){
        echo " e é par!";
    }else{
        echo " e é impar";
    }

}
function maiorValor($valor1=0,$valor2=0,$valor3=0,$valor4=0,$valor5=0){
    $valor1 = (int)$valor1;
    $valor2 = (int)$valor2;
    $valor3 = (int)$valor3;
    $valor4 = (int)$valor4;
    $valor5 = (int)$valor5;
    echo max($_POST);
}

function menorValor($valor1=0,$valor2=0,$valor3=0,$valor4=0,$valor5=0){
    $valor1 = (int)$valor1;
    $valor2 = (int)$valor2;
    $valor3 = (int)$valor3;
    $valor4 = (int)$valor4;
    $valor5 = (int)$valor5;
    echo min($_POST);
}

function eTriangulo($V1=0,$V2=0,$V3=0){
    $V1 = (int)$V1;
    $V2 = (int)$V2;
    $V3 = (int)$V3;
    
    if ($V1 <= $V2+$V3 && $V2 <= $V1+$V3 && $V3 <= $V1+$V2){
        echo "É triangulo";
    } else{
        echo "Não é tringulo";
    }
}
function tipoTriangulo($V1=0,$V2=0,$V3=0){
        $V1 = (int)$V1;
        $V2 = (int)$V2;
        $V3 = (int)$V3;

    if ($_POST["V1"]==$_POST["V2"] and $_POST["V2"]==$_POST["V3"]) {
        echo "<br>Equilatero";
    }elseif ($_POST["V1"]!=$_POST["V3"] and $_POST["V1"]!=$_POST["V2"] and $_POST["V2"]!=$_POST["V3"]){
            echo "<br>Escaleno";
    }else{
        echo "<br>Isosceles";
    }
 }

 
