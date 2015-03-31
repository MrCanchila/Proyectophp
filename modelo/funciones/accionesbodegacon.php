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
        require '../dtos/BodegaDTO.php';
        require '../daos/BodegaDAO.php';
        require '../utilidades/Conexion.php';
        // put your code here
        if (isset($_POST['registrarBodega'])) {
            $bodega = new BodegaDTO;
            $nombre = $_POST['txtNombre'];
            $direccion = $_POST['txtDireccion'];
            $bodega->__setNombre($nombre);
            $bodega->__setDireccion($direccion);
            $bodegaDao = new BodegaDAO();
            echo $bodegaDao->insertarBodega($bodega);
        } else {
            echo 'Hay un error';
        }
        ?>
        <?php
        define('CONTROLADOR', TRUE);

        require_once '../daos/BodegaDAO.php';
        require '../dtos/BodegaDTO.php';

        $id = (isset($_REQUEST['idBodega'])) ? $_REQUEST['idBodega'] : null;

        if ($id) {
            $bodega = BodegaDAO::buscarBodegaPorId($id);
        } else {
            $bod = new BodegaDTO();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : null;
            $direccion = (isset($_POST['txtDireccion'])) ? $_POST['txtDireccion'] : null;
            $bod->setNombre($nombre);
            $bod->setDescripcion($direccion);
            $bod->guardar();
            header('Location: bodegas.php');
        } else {
            include '../../paginas/bodegas/modificarbodega.php';
        }
        ?>
    </body>
</html>
