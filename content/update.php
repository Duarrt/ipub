<!DOCTYPE html>
    <html>
    <head>
    <meta charset='utf-8' />
    <title></title>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <link rel='stylesheet' type='text/css' href='../styles/form2.css'>
    </head>
    <body> 
<?php
        require "conexao.php";

        $src = $_POST["source"];

        $result = mysqli_query($con, "SELECT * FROM membro WHERE idMembro='$src'");
            if(!$result){ // Se não houver registro
                echo "Não há registros...:".mysqli_error($con);
            }else{
                echo "<div class='form'>     
                <form action='index.php?id=update_' method='POST'>  
                <p  style='font-size: 18px;'>ALTERAÇÃO DE DADOS</p>                ";
            }
            if(mysqli_affected_rows($con) != 0) {
                while($usuario = mysqli_fetch_assoc($result)){
                    $id = $usuario["idMembro"];
                    $nome = utf8_encode($usuario["nome"]);
                    $cpf = $usuario["cpf"];
                    $telefone = $usuario["telefone"];
                    $data = $usuario["data_nasc"];
                    $email = $usuario["email"];
                    echo "  
                
                <div>
                <label for='idMembro'>ID: <input type='int' name='idMembro' placeholder='Ex.: 1' required value=" . $id . "></label>
                </div>
                  
                    <div>
                <label for='name'>Nome: <input type='text' name='nome' placeholder='Ex.: João da Silva' required value=" . $nome . "></label>
            </div>
            <div>
                <label for='cpf'>CPF: <input type='text' name='cpf' placeholder='Ex.: 000.000.000-00' onkeypress='return mascaraGenerica(event, this, '###.###.###-##');' required  value=" . $cpf . "></label>
            </div>
            <div>
                <label for='phone'>Telefone: <input type='text' name='telefone' placeholder='Ex.: (00) 0000-0000' onkeypress='return mascaraGenerica(event, this, '(##) ####-####');' required value=" . $telefone . "></label>
            </div>
            <div>
                <label for='birthday'>Data Nasc.: <input type='text' name='data_nasc' placeholder='Ex.: dd/mm/aaaa' maxlength='10' onkeyup='mascaraData(this);' required value=" . $data . "></label>
            </div>
            <div>
                <label for='mail'>Email: <input type='text' name='email' placeholder='Ex.: joaodasilva@gmail.com' required value=" . $email . "></label>  
            </div>
            <input type='submit' name='alterar' value='Alterar'>
            </div>        
                    ";
                }
            }  
        ?>
    </form>
    </body>
</html>