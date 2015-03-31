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
        <?php
        // put your code here
        $solicitudDto = new SolicitudDTO();
        $solicitudDao = new SolicitudDAO();
        ?>
        <form action="../../modelo/funciones/acciones.php" method="post" name="registrarSolicitud">
            
                <label for="txtFecha">Fecha solicitud:</label>
                <input type="date" name="txtFecha" id="txtFecha">
                
                <label for="txtObservaciones">Observaciones:</label>
                <input type="text" name="txtObservaciones" id="txtObservaciones">
                
                <input type="hidden" name="txtUserId" id="txtUserId">
                
                <input type="submit" name="registrarSolicitud" id="registrarSolicitud"
                       value="Solicitar">
            
        </form>
        
    </body>
</html>
