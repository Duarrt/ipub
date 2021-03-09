<?php
    require "conexao.php";
//recebendo as variáveis inseridas
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $sexo = $_POST["sexo"];
    $data = $_POST["data"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $usuario = $_POST["usuario"];

    //inserindo os dados na tabela "pastores"    
    $query_select = "SELECT usuario FROM pastores WHERE usuario = '$usuario'";
    $select = mysqli_query($con, $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['usuario'];
    
      if($usuario == "" || $usuario == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='index.php?id=cad';</script>";
        }else{
          if($logarray == $usuario){
            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='index.php?id=cad';</script>";
            die();
          }else{
            $query = "INSERT INTO pastores (nome, cpf, telefone, endereco, sexo, data_nasc, email, usuario, senha, nivel)VALUES('$nome','$cpf','$telefone','$endereco','$sexo','$data','$email', '$usuario', '$senha', 2)";
            $result = mysqli_query($con, $query);
            if($result){
              echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php?id=inicio'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php?id=cad'</script>";
            }
          }
        }
?>