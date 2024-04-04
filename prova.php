<?php
// EX 1 
function oi(){
    echo "Hello world";
}


// EX 2
function nome(){
    $nomerecebido = "Gian";
    echo"Hello {$nomerecebido}";

}
//EX 3

function mostrarAluno(){
$nomeAlunos[ "carlos", "gian", "cauan", "cauã", "jorge"];

echo $nomeAlunos[4];




}

//EX 4

function numerosPN(){

 $numeros = [1, 2, -3, -4]

}

//EX 5
$numeros = [1, 2, -3, -4]
function numeross(){

    if( $numeros >= 0){
        echo "Positivo"
    }else{
        echo "Negativo"
    }
    

    
}




//EX 6


$NomeAlunos = [ ]





$NomeAlunos = [
[nome =
    ["cauan" => "5"],
    ["gian" => "4"]
]
]

echo $NomeAlunos[0] ["nome"] caracteres;




//EX 7


function campos[$nome, $idade, $cursoTecnico](){



    $nome ="joão";
    $idade ="16";
    $cursoTecnico = "informatica";

}

   
//EX 8

function associativa(){


$nome: string = "cauan";
$idade = "16";
if($idade >=18){
    echo "voce tem mais de 18 anos {$nome}";
}else{
    echo "voce nao tem mais de 18 {$nome}";
}

}
//EX 9



$alunos = [

    ["curso" => "informatica"],
    ["curso" => "administracao"]
]

echo $alunos[0]["curso"];

?>