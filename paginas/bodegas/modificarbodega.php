<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require '../../modelo/dtos/BodegaDTO.php';
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Modificar bodega</title>
        <?php
            $bodegaDto = new BodegaDTO();
        ?>
    </head>
    <body>
        <h1>Modificar bodega</h1>
        <form method="post" action="../../modelo/funciones/accionesbodegacon.php">
            <label for="txtNombre"> Nombre </label>
            <br />
            <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $bodegaDto->__getNombre() ?>" required />
            <br />
            <label for="txtDireccion"> Dirección </label>
            <br />
            <input type="text" name="txtDireccion" id="txtDireccion" value="<?php echo $bodegaDto->__getDireccion() ?>" required />
            <br />            
            <?php if ($bodegaDto->__getIdBodega()): ?>
            <input type="hidden" name="idBodega" value="<?php echo $bodegaDto->__getIdBodega()?>" />
            <?php endif; ?>
            <input type="submit" value="Guardar" />
            <a href="index.php"> Cancelar </a>
        </form>
    </body>
</html>
