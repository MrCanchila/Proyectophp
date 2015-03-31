<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SolicitudDTO
 *
 * @author Sena
 */
class SolicitudDTO {
    //put your code here
    private $idSolicitud = 0;
    private $fechaSolicitud = "";
    private $observaciones = "";
    private $userId = 0;
    
    public function __setIdSolicitud($idSol){
        $this->idSolicitud = $idSol;
    }
    
    public function __getIdSolicitud(){
        return $this->idSolicitud;
    }
    
    public function __setFechaSolicitud($fec){
        $this->fechaSolicitud = $fec;
    }
    
    public function __getFechaSolicitud(){
        return $this->fechaSolicitud;
    }
    
    public function __setObservaciones($obser){
        $this->observaciones = $obser;
    }
    
    public function __getObservaciones(){
        return $this->observaciones;
    }
    
    public function __setUserId($user){
        $this->userId = $user;
    }
    
    public function __getUserId(){
        return $this->userId;
    }
    
}
