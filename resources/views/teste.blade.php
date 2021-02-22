<?php 

$jsonString = '{"nome": "Caique", "idade": 27, "CPF": "974.983.384-08", "telefones": ["8738634051","87988037828"]}';
$arrString = json_decode($jsonString);

echo "<p><b>Nome: </b>". $arrString->nome ."</p>";
echo "<p><b>Idade: </b>". $arrString->["idade"]. "</p>";
echo "<p><b>CPF: </b>". $arrString->CPF." </p>";
for ($i = 0; $i < count($arrString->telefones); i++) {
    echo "<p><b>Telefone {$i}: </b>". $arrString->telefones[$i] ."</p>";
}



$nome = "nome";//$_GET["nome"];
$email = "email"; //$_GET["email"];    


function callArray() {
    $opa = array(
        "01" => array(
            'nome' => 'Caique',
            'idade' => 27,
            'sexo' => 'M'
        ),
        "02" => array(
            'nome' => 'Ivana',
            'idade' => 24,
            'sexo' => 'F'
        ),
        "03" => array(
            'nome' => 'Sophia',
            'idade' => 7,
            'sexo' => 'F'
        )
    );
    return $opa; 
}
        
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aprendendo PHP</title>
    </head>
    <body >
        <h2> APRENDENDO PHP </h2>
       <ul> 
        <?php
            $opa = callArray();
            foreach ($opa as $value => $v) {
                echo "<li> {$value} <ul>";
                foreach ($v as $attr => $val)
                    echo "<li> {$attr} = {$val} </li>";
                echo "</ul>";
            }    
        ?>
       </ul>
       <p> <?= $nome?> : <?= $email?> </p>
    </body>
</html>
