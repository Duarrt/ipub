<?php

require "conexao.php";

$usuario = @$_REQUEST["usuario"];
$senha = @$_REQUEST["senha"];

$a = "select * from pastores where usuario = '$usuario'";
$b = "select * from pastores where senha = '$senha'";
$result = mysqli_query($con,$a)or die("Erro:".mysqli_error($con));
$num = mysqli_num_rows($result);
$result1 = mysqli_query($con,$b)or die("Erro:".mysqli_error($con));
$numm = mysqli_num_rows($result1);

if($num>=1){
    
    while($verificar = mysqli_fetch_array($result)){
    $nivel = $verificar['nivel'];
     
    if($nivel==1){
    $_SESSION["admin"]=$usuario;
        @$id = $_GET["id"];
            $id = "PrBD";
            include $pg["$id"];
    }elseif($nivel==2){
    $_SESSION["pastor"]=$usuario;
        @$id = $_GET["id"];
            $id = "PrBD";
            include $pg["$id"];
    }elseif($nivel==3){
    $_SESSION["membro"]=$usuario;
        @$id = $_GET["id"];
            $id = "inicio";
            include $pg["$id"];
    } 
        
    }
}
elseif($numm>=1){
    echo "<script>alert('Login Incorreto ...')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=../content/index.php?id=inicio'/>";
}
else{
    echo "<script>alert('login incorreto ...')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=../content/index.php?id=inicio'/>";
}
?>
