<!DOCTYPE html>
<html>
<head>
<title>Login - Autenticación Acceso Sistema</title>
</head>
<body>
<div id="formlogin">
    <form action="consultalogin.php" method="post">
        <label for="fname">Autenticación Sistema</label><br>
        <hr>
        <label for="fname">Usuario:</label><br>
        <input type="text" id="frmusuario" name="frmusuario"><br>
        <label for="lname">Clave:</label><br>
        <input type="password" id="frmclave" name="frmclave"><br>
        <br>
        <input type="submit" value="Ingresar"><br>
    </form> <br>
    <?php
    if(isset($_GET['error']))
    {
    ?>
    <div id="error">
        ERROR!!!! problemas con el Usuario y/o contraseña,<br>
        o la cuenta se encuentra desactivada, favor comunicarse con el Admin.
    </div>    
    <?php
    }
    ?>
</div>
</body>
</html>