<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <table border="2" class="w3-table">
        <tr><th>Protocolo</th><th>ID do Membro</th><th>Data</th><th>Hora</th><th>ID do Pastor</th></tr>
            <?php
                require "conexao.php";
                        
                $script = "SELECT * FROM `atendimento`;";
                $registro = mysqli_query($con, $script);
                if(mysqli_num_rows($registro)>0) {
                    while($usuario = mysqli_fetch_assoc($registro)){
                        $protocolo = $usuario["protocolo"];
                        $idMembro = utf8_encode($usuario["idMembro"]);
                        $data = $usuario["dataAtendimento"];
                        $hora = $usuario["hora"];
                        $idPastor = $usuario["idPastores"];
                        echo "<tr><td>$protocolo</td><td>$idMembro</td><td>$data</td><td>$hora</td><td>$idPastor</td></tr>";
                    }
                if(!$registro) // Se não houver registro
  	                echo "Não há registros...:".mysqli_error($conexao);
                else
 	                echo "Total de registros encontrados: \n\n";
                }    
            ?>

            
    </table>
</body>
</html>