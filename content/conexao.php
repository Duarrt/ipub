<?php
//definindo as variáveis de conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "tcc";
//realizando a conexão com o banco de dados    
    $con = mysqli_connect($servidor, $usuario, $senha, $db);
//verificando caso dê erro    
    if (mysqli_connect_error()) {
        //echo "<meta http-equiv='refresh' content=\"5; URL='index.php'\"/>"; 
        die("Não foi possível conectar:: " .mysqli_error($con));
    }
?>