<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BodegaDTO
 *
 * @author Mona
 */
class BodegaDTO {
    //put your code here
    private $idBodega = 0;
    private $nombre = "";
    private $direccion = "";
    
    public function __setIdBodega($idBodega){
        $this->idBodega = $idBodega;
    }
    
    public function __getIdBodega(){
        return $this->idBodega;
    }
    
    public function __setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function __getNombre(){
        return $this->nombre;
    }
    
    public function __setDireccion($direccion){
        $this->direccion = $direccion;
    }
    
    public function __getDireccion(){
        return $this->direccion;
    }
    
}
