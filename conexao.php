<?php

    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "meu_banco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "Erro de conexão" . $conn->connect_error;
    }else{
        echo "Conexão Bem-Sucedida";
    }

?>