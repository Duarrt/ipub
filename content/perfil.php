<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../styles/form2.css">
</head>
<body>
    <div class="form">
    <form action="index.php?id=update" method="POST">
    <p style="font-size: 18px;">ALTERARAÇÃO DE DADOS</p>
            <div>
                <label for="name">ID: <input type="text" name="source" placeholder="Ex.:1" required></label>
            </div>
            <input type="submit" value="ALTERAR">
    </form>
    <form action="index.php?id=delete" method="POST">
    <p  style="font-size: 18px;">EXCLUSÃO DE DADOS</p>
            <div>
                <label for="name">Nome ou ID: <input type="text" name="source" placeholder="Ex.: 'João da Silva' Ou '1'" required></label>
            </div>
            <input type="submit" value="EXCLUIR">
    </form>
</div>    

</body>
</html>  