<?php

    require_once("./conexao.php");

    @$idMembro = $_POST["idMembro"];
    @$dataAtendimento = $_POST["dataAgendamento"];
    @$pastor = $_POST["pastor"];
    @$hora = $_POST["hora"];
    @$obs = $_POST["obs"];
    //@$auxP = implode(',',$pastor);
    //@$auxH = implode(',',$horario);
    
    $script = "INSERT INTO atendimento(idMembro,dataAtendimento,hora,idPastores,obs)VALUES('$idMembro','$dataAtendimento','$hora','$pastor','$obs');";
    $insert = mysqli_query($con, $script);
    if(!$insert) { // Se não inserir
        echo "Erro ao inserir os dados:".mysqli_error($con);
    }else { 
        echo "Agendado com Sucesso!"."<meta http-equiv='refresh' content=\"5; URL='index.php?id=about'\"/>";
    }
?>