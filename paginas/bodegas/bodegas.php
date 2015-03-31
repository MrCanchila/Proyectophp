<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require '../../modelo/dtos/BodegaDTO.php';
require '../../modelo/daos/BodegaDAO.php';
require '../../modelo/utilidades/Conexion.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $bodegas = BodegaDAO::recuperarBodegas();
        ?>
        <table border="1px">
            <tr>
                <th>Id Bodega</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>

            <?php foreach ($bodegas as $item): ?>
                <tr>
                    <td><?php echo $item['idBodega'] ?></td>
                    <td><?php echo $item['nombre'] ?></td>
                    <td><?php echo $item['direccion']; ?> </td>
                    <td><a href="../../paginas/bodegas/modificarbodega.php?idBodega=<?php?>"/><img src='../imagenes/modificar.png' width="32" height="32" alt="Modificar bodega" 
                                                                                 title="Modificar bodega"/></td>
                    <td><a href="../../paginas/bodegas/eliminarbodega.php"/><img src='../imagenes/eliminar.png' width="32" height="32" alt="Eliminar bodega" 
                                                                                 title="Eliminar bodega"/></td>
                
            <?php endforeach; ?>
        </table>
    </body>
</html>
