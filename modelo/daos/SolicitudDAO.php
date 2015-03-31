<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SolicitudDAO
 *
 * @author Sena
 */
class SolicitudDAO {
    //put your code here
    public function insertarSolicitud(SolicitudDTO $newSolicited) {
        $con = Conection::getConexion();
        $insertSolicitud = 'INSERT INTO solicitudes VALUES (null, ?, ?, ?)';

        try {            
            $query = $con->prepare($insertSolicitud);
            $query->bindParam(1, $newSolicited->__getIdSolicitud());
            $query->bindParam(2, $newSolicited->__getFechaSolicitud());
            $query->bindParam(2, $newSolicited->__getObservaciones());
            $query->bindParam(2, $newSolicited->__getUserId());
            $query->execute();
        } catch (PDOException $ex) {
            echo 'Ocurrio un error. Detalle ' . $ex->getMessage();
        }
    }
}
