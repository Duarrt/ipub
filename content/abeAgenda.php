<?php
    
    // Código de teste para validação das informações >>
    
    /* $dataInicial = $_POST['dataInicial'];
    $dataFinal = $_POST['dataFinal'];

    echo 'Data de abertura: '.$dataInicial.'<br/>';
    echo 'Data de Fechamento: '.$dataFinal.'<br/>';    

    if(isset($_POST['acao']) && $_POST['acao'] == "salvar") {
        if(!empty($_POST['pastor'])) {
            $campo = $_POST['pastor'];
            echo 'Pastores selecionados disponíveis: <br/>';
            foreach($campo as $valor) {
                echo $valor.'<br/>';
            }
        }
        if(!empty($_POST['hora'])) {
            $campoHora = $_POST['hora'];
            echo 'Horários selecionados disponíveis: <br/>';
            foreach($campoHora as $valorHora) {
                echo $valorHora. '<br/>';
            }
        }
    } */

    /* Este código permite que o administrador da página crie uma pagina temporaria para abertura da agenda para atendimento através de uma interface própria >>

        $dataInicial = $_POST['dataInicial'];

        $dataFinal = $_POST['dataFinal'];


        function pastor(){
            if(isset($_POST['acao']) && $_POST['acao'] == "salvar") {
                if(!empty($_POST['pastor'])) {
                    $campo = $_POST['pastor'];
                    echo '<div> Selecione o Pastor: <select name="pastor" id="pastor">';
                    foreach($campo as $valor) {
                        echo '
                            <option value="'.$valor.'">'.$valor.'</option><br/>
                            ';
                    }
                    echo '</select></div><br>';
                }
            }
        }    

        function horario(){
            if(isset($_POST['acao']) && $_POST['acao'] == "salvar") {
                if(!empty($_POST['hora'])) {
                    $campoHora = $_POST['hora'];
                    echo '<div>
                        Selecione o horário: <select name="hora" id="hora">';
                    foreach($campoHora as $valorHora) {    
                        echo '
                            <option value="'.$valorHora.'">'.$valorHora.'</option><br/>
                        ';
                    }
                    echo '</select></div><br>';
                }
            }   
        } 
        

    echo '<!DOCTYPE>
    <!DOCTYPE html>
    <html lang="ptbr">
    <head>
        <title>Calendário Teste</title>
        <meta charset="utf-8">
    </head>
        <body>
            <h3>Calendário Teste</h3>
            <form action="agendamento.php" method="POST">
                <div>
                    Selecione o dia para agendamento:
                    <input type="date" id="data" name="agendamento" min="'.$dataInicial.'" max="'.$dataFinal.'">
                </div><br>';
                
    pastor();

    horario();
                
    echo '<input type="submit" value="Registrar">
            </form>
            </body>
            </html>';
    
    

    include ("conexao.php");
    
    $dataInicial = $_POST['dataInicial'];
    $dataFinal = $_POST['dataFinal'];

    $script = "INSERT INTO Agenda (dataAbre, dataFecha) VALUES ('$dataInicial', '$dataFinal');";
    $insert = mysqli_query($con, $script);
    if(!$insert) { // Se não inserir
        echo "Erro ao inserir os dados...:".mysqli_error($con);
    }else { 
       echo "Data Ok!";
    }

    if(isset($_POST['acao']) && $_POST['acao'] == "salvar") {
        if(!empty($_POST['pastor'])) {
            $campo = $_POST['pastor'];
            echo '<div> Selecione o Pastor: <select name="pastor" id="pastor">';
            foreach($campo as $valor) {
                echo '
                    <option value="'.$valor.'">'.$valor.'</option><br/>
                    ';
                    $script_1 = "INSERT INTO Agenda (pastor) VALUES ('$valor');";
                    $insert_1 = mysqli_query($con, $script);
                    mysql_query($query) or die(mysql_error()); 

                if(!$insert_1) { // Se não inserir
                      echo "Erro ao inserir os dados do Pastor...:".mysqli_error($con);
                }else { 
                     echo "Pastor Ok!";
                }
            }
            echo '</select></div><br>';
        }
    }

        if(isset($_POST['acao']) && $_POST['acao'] == "salvar") {
            if(!empty($_POST['hora'])) {
                $campoHora = $_POST['hora'];
                echo '<div>
                    Selecione o horário: <select name="hora" id="hora">';
                foreach($campoHora as $valorHora) {    
                    echo '
                        <option value="'.$valorHora.'">'.$valorHora.'</option><br/>
                    ';
                    $script_2 = "INSERT INTO Agenda (horario) VALUES ('$valorHora');";
                    $insert_2 = mysqli_query($con, $script);
                    if(!$insert_2) { // Se não inserir
  	                    echo "Erro ao inserir os dados do horario...:".mysqli_error($con);
                    }else { 
 	                    echo "Horário Ok!";
                    }
                }
                echo '</select></div><br>';
            }
        }   
        */
        
    require_once("./conexao.php");

    if(isset($_POST['acao'])){
        $dataInicial = $_POST['dataInicial'];
        $dataFinal = $_POST['dataFinal'];
        $pastor = $_POST['pastor'];
        $horario = $_POST['hora'];
        $auxP = implode(',',$pastor);
        $auxH = implode(',',$horario);
        //echo $auxP; Resposta
        //echo $auxH; Resposta

        //$script = "INSERT INTO Agenda (dataAbre,dataFecha,pastor,horario) VALUES ('$dataInicial', '$dataFinal','$auxP','$auxH');";

       $script =  "UPDATE agenda SET dateAbre='$dataInicial',dateFecha='$dataFinal',horario='$auxH',IdPastores='$auxP' WHERE idAgenda=2;";

        $insert = mysqli_query($con, $script);
        if(!$insert) { // Se não inserir
            echo "Erro ao inserir os dados:".mysqli_error($con);
        }else { 
            echo "Agenda aberta com sucesso!"."<meta http-equiv='refresh' content=\"5; URL='index.php?id=login2'\"/>";
        }
    }
?>