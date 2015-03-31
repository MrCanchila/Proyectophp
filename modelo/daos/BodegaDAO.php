<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BodegaDAO
 *
 * @author Mona
 */
class BodegaDAO {
    //put your code here
    public function insertarBodega(BodegaDTO $new) {
        $con = Conection::getConexion();
        $insert = 'INSERT INTO bodegas VALUES (null, ?, ?)';

        try {            
            $query = $con->prepare($insert);
            $query->bindParam(1, $new->__getNombre());
            $query->bindParam(2, $new->__getDireccion());
            $res = $query->execute();
            if ($res != 0) {
                echo 'Registro exitoso';
            }else {
                echo 'Ha tenido un error';
            }
            
        } catch (PDOException $ex) {
            echo 'Ocurrio un error. Detalle ' . $ex->getMessage();
        }
    }
    
    public function bodegas() {
        $con = Conection::getConexion();
        $bodegas = new BodegaDTO();
        try {

            $consulta = "SELECT idbodega, nombre, direccion FROM bodegas";
            $datoBodega = $con->prepare($consulta);
            $datoBodega->execute();

            foreach ($datoBodega as $rows) {
                $bodegas->__setIdBodega($rows['idbodega']);
                $bodegas->__setNombre($rows['nombre']);
                $bodegas->__setDireccion($rows['direccion']);
            }
        } catch (PDOException $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();
        }        
    }
    
    public static function recuperarBodegas(){
       $conexion = Conection::getConexion();
       $consulta = $conexion->prepare('SELECT idBodega, nombre, direccion FROM bodegas ORDER BY nombre');
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
    
    public static function buscarBodegaPorId($id){
       $conexion = Conection::getConexion();
       $consulta = $conexion->prepare('SELECT nombre, direccion FROM bodegas WHERE idBodega = :id');
       $consulta->bindParam(':id', $id);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['nombre'], $registro['direccion'], $id);
       }else{
          return false;
       }
    }
}
