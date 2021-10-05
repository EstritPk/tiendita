<?php

session_start();
include("functions/setup.php");

if(isset($_SESSION['usu']))
{
?>    
<!DOCTYPE html>
<html>
<head>
<title>Formulario STRT</title>
</head>
<body>

<form action="registrar.php" method="post">
        <label for="fname">Ingrese Nombre:</label><br>
        <input type="text" id="frmnombre" name="frmnombre"><br>
        <label for="lname">Ingrese Ap. Paterno:</label><br>
        <input type="text" id="frmappaterno" name="frmappaterno"><br>
        <label for="fname">Ingrese Ap. Materno:</label><br>
        <input type="text" id="frmapmaterno" name="frmapmaterno"><br>
        <label for="lname">Ingrese Usuario:</label><br>
        <input type="text" id="frmusuario" name="frmusuario"><br>
        <label for="lname">Ingrese Clave:</label><br>
        <input type="text" id="frmclave" name="frmclave"><br><br>
        <input type="submit" value="Ingresar"><br>
    </form>
    <hr>
    <table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>AP. PATERNO</th>
        <th>AP. MATERNO</th>
        <th>USUARIO</th>
        <th>F. CREACION</th>
        <th>ESTADO</th>
    </tr>

    <?php
        $sql="select * from usuarios";
        $resul=mysqli_query(conectar(),$sql);
        while($datos=mysqli_fetch_array($resul))
        {
    ?>
    <tr>
        <td><?php echo $datos['Id'];?></td>
        <td><?php echo $datos['nombre'];?></td>
        <td><?php echo $datos['appaterno'];?></td>
        <td><?php echo $datos['apmaterno'];?></td>
        <td><?php echo $datos['usuario'];?></td>
        <td><?php echo fechaesp($datos['fecha_creacion']);?></td>
        <td><?php
              if($datos['estado']==0)
              {
                ?>
                  <img src="i">
                <?php
              }else{
                ?>
                  <img src="">
                <?php
              }       
        ?></td>
        </tr>
        <?php
         }
         ?>
    </table>    
</body>
</html>
<?php
}else{
    header("Location:error.php")
}
?>