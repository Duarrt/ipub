<?php
  // require "login.php";
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = "tcc";
    $con = mysqli_connect($servidor, $usuario, $senha); 
    $banco = mysqli_select_db($con, $bd);
    mysqli_set_charset($con,'utf8');
  
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $msg = $_POST["msg"];
  
  $script = "INSERT INTO contatos (nome, telefone, email, msg) VALUES ('$nome', '$telefone', '$email', '$msg');";
  $insert = mysqli_query($con, $script);
  
  if(!$insert) { // Se não inserir
  	echo "Erro ao inserir os dados...:".mysqli_error($con);
  }else { 
 	echo "Cadastro realizado com sucesso..."."<meta http-equiv='refresh' content=\"5; URL='index.php?id=about'\"/>";
  }
?>