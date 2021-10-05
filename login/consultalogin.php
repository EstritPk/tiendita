<?php

session_start();

include("functions/setup.php");

$sql="select * from usuarios where usuario'".$_POST['frmusuario']."' and clave='".md5($_POST['frmclave'])."' and estado=1";
$result=mysqli_query(conectar(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($cont!=0)
{
    $_SESSION['usu']=$datos['nombre']." ".$datos['appaterno']." ".$datos['apmaterno'];
    header("Location:principal.php");
}else{
    header("Location:login.php?error");
}

?>