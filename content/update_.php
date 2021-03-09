<?php
    require "conexao.php";

    $id = $_POST["idMembro"].
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $data = $_POST["data_nasc"];
    $email = $_POST["email"];

    $result = mysqli_query($con, "UPDATE membro SET nome='$nome', cpf='$cpf', telefone='$telefone', data_nasc='$data', email='$email' WHERE idMembro='$id'");
            if(!$result){ // Se não houver registro
                echo "Não há registros...:".mysqli_error($con);
            }else{
                echo "Sucesso! \n\n"."<meta http-equiv='refresh' content=\"0; URL='index.php'\"/>";
            }
?>