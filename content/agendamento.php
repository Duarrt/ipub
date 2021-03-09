<?php
    require_once("./conexao.php");

    $sql = "SELECT dateAbre,dateFecha,horario,idPastores FROM agenda WHERE idAgenda=2";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {

//print_r(explode(',', $horas[0]['horario']));
//print_r(explode(',', $pastores[0]['idPastores']));


?>
    <!DOCTYPE html>
    <html lang='ptbr'>
    <head>
        <title>Calendário Teste</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="../styles/form2.css">
    </head>
    <body>
        <div class="form">
            <form action='index.php?id=agendamento_' method='POST'>
            <p style="font-size: 18px;">Calendário Teste</p>

            <div>
            <label for="idMembro">Digite seu ID:</label>
                <input type='int' id='id' name='idMembro' placeholder="Ex.: 123" required>
            </div>

            <div>       
                <label for="dia">Selecione o dia para agendamento: </label>
                <input type='date' id='data' name="dataAgendamento" min="<?php echo htmlspecialchars($row['dateAbre']);?>" max="<?php echo htmlspecialchars($row['dateFecha']);?>" required>
            </div><br>

            <div>
            <label for="hora">Selecione o horário:</label> 
            <select name='hora' id='hora' required>
            
                <?php foreach (explode(',', $row['horario']) as $ing) { ?> 
                                <option value='<?php echo htmlspecialchars($ing);?>'><?php echo htmlspecialchars($ing);?></option>                 
                <?php } ?>   
            </select>
            </div>

            <div>
            <label for="pastor">Selecione o Pastor:</label>
            <select name='pastor' id='idPastores' required>
            <?php foreach (explode(',', $row['idPastores']) as $igl) {
                if($igl == '1'){
                    $aux1 = 'Pr. Samuel Tomaz';
                ?>
                <option value='<?php echo htmlspecialchars($igl);?>'><?php echo htmlspecialchars($aux1);?></option>
                <?php
                }
                elseif ($igl == '2'){
                    $aux2 = 'Pr. Adairton Dahora';
                    ?>
                    <option value='<?php echo htmlspecialchars($igl);?>'><?php echo htmlspecialchars($aux2);?></option>
                    <?php
                }   
            ?>

            <?php } } } ?>
            </select>
            </div>
            <div>
            <label for="msg">Mensagem:</label><br> 
            <textarea name="obs" placeholder="Ex.: Problemas no relacionamento"></textarea>
            </div>
            <div class="button">
            <button type="submit">Salvar Registro</button>
          </form>
        </div>
        </body>
        </html>

