<?php

session_start();

if(isset($_SESSION['usu']))
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Principal</title>
</head>
<body>

<div id="">
    <p>Bienvenido Usuario: <b><?php echo strtoupper($_SESSION['usu']);?></b><p><br>
    <a href="cerrar.php">Cerrar Sesion</a>
</div>
<h1>Principal</h1>
<hr>
<div id="">
    <a href="formulario_strt.php"><img scr=""><br>
    Adm. Usuarios</a>
</div>
</body>
</html>
<?php
}else{
    header("Location:error.php");
}

?>