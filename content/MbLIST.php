<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <table border="2" class="w3-table">
        <tr><th>ID</th><th>Nome</th><th>CPF</th><th>Telefone</th><th>Endereço</th><th>Sexo</th><th>Data de Nascimento</th><th>Email</th></tr>
            <?php
                require "conexao.php";
                        
                $script = "SELECT * FROM `membro`;";
                $registro = mysqli_query($con, $script);
                if(mysqli_num_rows($registro)>0) {
                    while($usuario = mysqli_fetch_assoc($registro)){
                        $id = $usuario["idMembro"];
                        $nome = utf8_encode($usuario["nome"]);
                        $cpf = $usuario["cpf"];
                        $tel = $usuario["telefone"];
                        $end = $usuario["endereco"];
                        $sexo = $usuario["sexo"];
                        $data_nasc = $usuario["data_nasc"];
                        $email = $usuario["email"];
                        echo "<tr><td>$id</td><td>$nome</td><td>$cpf</td><td>$tel</td><td>$end</td><td>$sexo</td><td>$data_nasc</td><td>$email</td></tr>";
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