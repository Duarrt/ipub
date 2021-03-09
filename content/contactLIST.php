<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <table border="2" class="w3-table">
        <tr><th>Nº do chamado</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Mensagem</th></tr>
            <?php
                require "conexao.php";
                        
                $script = "SELECT * FROM `contatos`;";
                $registro = mysqli_query($con, $script);
                if(mysqli_num_rows($registro)>0) {
                    while($usuario = mysqli_fetch_assoc($registro)){
                        $n_cham = $usuario["n_chamado"];
                        $nome = utf8_encode($usuario["nome"]);
                        $tel = $usuario["telefone"];
                        $email = $usuario["email"];
                        $msg = $usuario["msg"];
                        echo "<tr><td>$n_cham</td><td>$nome</td><td>$tel</td><td>$email</td><td>$msg</td></tr>";
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