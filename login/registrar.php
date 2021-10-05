<?php

$con=mysqli_connect("localhost","root","","login");

date_default_timezone_set('America/Santiago');
$fechahoy=date('Y-m-d');
$hora=date('H:i:s');

$sql="INSERT INTO usuarios SET nombre='".$_POST['frmnombre']."',appaterno='".$_POST['frmappaterno']."',apmaterno='".$_POST['frmapmaterno']."'usuario='".$_POST['frmusuario']."'clave='".md5($_POST['frmclave'])."'estado=1,fecha_creacion='".$fechahoy."'hora_creacion='".$hora."'";

?>