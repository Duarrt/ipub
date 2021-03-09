<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <table border="2" class="w3-table">
        <tr><th>ID</th><th>Nome</th><th>CPF</th><th>Telefone</th><th>Sexo</th><th>Data de Nascimento</th><th>Email</th></tr>
        <?php
        require "conexao.php";

        $src = $_POST["source"];

        $result = mysqli_query($con, "SELECT * FROM pastores WHERE idPastores='$src' or nome='$src'");
            if(!$result){ // Se não houver registro
                echo "Não há registros...:".mysqli_error($con);
            }else{
                echo "Total de registros encontrados \n\n";
            }
            if(mysqli_affected_rows($con) != 0) {
                while($usuario = mysqli_fetch_assoc($result)){
                    $id = $usuario["idPastores"];
                    $nome = utf8_encode($usuario["nome"]);
                    $cpf = $usuario["cpf"];
                    $telefone = $usuario["telefone"];
                    $sexo = $usuario["sexo"];
                    $data = $usuario["data_nasc"];
                    $email = $usuario["email"];
                    echo "<tr><td>$id</td><td>$nome</td><td>$cpf</td><td>$telefone</td><td>$sexo</td><td>$data</td><td>$email</td></tr></table><br>";
                }
            }
    
        ?>
    </table>
</body>
</html>     