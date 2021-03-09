<?php
 // Start the session
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>IPUB TCC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../styles/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    @$id = $_GET["id"];
    $pg["inicio"]="inicio.html";
    $pg["cad"]="cad.html";
    $pg["cad_membros"]="cad_membros.php";
    $pg["src_membro"]="src_membro.php";
    $pg["src_pastor"]="src_pastor.php";
    $pg["about"]="about.html";
    $pg["project"]="project.html";
    $pg["contact1"]="contact.html";
    $pg["contact2"]="contact.php";
    $pg["contactLIST"]="contactLIST.php";
    $pg["logout"]="logout.php";
    $pg["login1"]="login.html";
    $pg["login2"]="login.php";
    $pg["PrBD"]="PrBD.html";
    $pg["PrCAD"]="PrCAD.php";
    $pg["PrLIST"]="PrLIST.php";
    $pg["MbLIST"]="MbLIST.php";
    $pg["agendamento"] = "agendamento.php";
    $pg["agendamento_"] = "agendamento_.php";
    $pg["aberturaAgenda"] = "abeturaAgenda.html";
    $pg["aberturaAgendaphp"] = "abeAgenda.php";
    $pg["LISTagendamento"] = "LISTagendamento.php";
    $pg["perfil"] = "perfil.php";
    $pg["delete"] = "delete.php";
    $pg["update"] = "update.php";
    $pg["update_"] = "update_.php";
    if(empty($id)) $id = "inicio"; 
?>            

    <header>
        <div class="main_content">
	       <img src="../images/logo.png" style="width:150px; height:100px">     
    	   <nav>
    	    <ul>
    			<li><a href="index.php?id=inicio">INÍCIO</a></li>
    			<li><a href="index.php?id=about">SOBRE NÓS</a></li>
    			<li><a href="index.php?id=project">PROJETOS</a></li>
    			<li><a href="index.php?id=contact1">CONTATO</a></li>
    			<li><a href="index.php?id=cad">CADASTRO</a></li>
                <li><a href="index.php?id=agendamento">AGENDAMENTO</a></li>
                <li><a href="index.php?id=perfil">PERFIL</a></li>
    			<li class="login"><a href="index.php?id=logout"><span class="glyphicon glyphicon-log-out"></span></button></a></li>
    			<li class="login"><a href="index.php?id=login1"><span class="glyphicon glyphicon-log-in"></span></button></a></li>
    		</ul>
    		</nav>
		</div>
	</header>

	<main>
        <?php include $pg[$id]; ?>
	</main>
	<footer>
		
	</footer>
	</div>
</body>	
</html>