<?php
        require "conexao.php";

        $src = $_POST["source"];

        $result = mysqli_query($con, "DELETE FROM membro WHERE idMembro='$src' or nome='$src'");
            if(!$result){ // Se não houver registro
                echo "Não há registros...:".mysqli_error($con);
            }else{
                echo "Sucesso! \n\n"."<meta http-equiv='refresh' content=\"0; URL='index.php'\"/>";
            }
        ?>