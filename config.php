<?php

$dhHOST= 'Localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName= "formulario_usuarios";

$conexao = new mysqli($dhHOST, $dbUsername, $dbPassword, $dbName);

if($conexao -> connect_errno){

    //echo"Erro";
}else{

   // echo"conexao efetuada com sucesso";
}


?>