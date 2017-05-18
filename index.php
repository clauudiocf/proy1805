<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        <?php if  (isset($_SESSION['USR']))?>
        <form>
            <div><label>Usuario</label><input type="text" nombre="nombre"></div>
            <div><label>Password</label><input type="password" nombre="clave"></div>
            <input type="submit" value="Acceder">
        </form>
        <?php 
            echo md5('#holamundo&');
            echo '<br>';
            echo md5('holamundo');
            echo '<br>';
            echo md5('HoLaMundo');
            echo '<br>';
            echo md5('HOLAMundo');
            echo '<br>';                                                                                                                                                                                    
        ?>
    </body>
</html>
