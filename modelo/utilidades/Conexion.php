<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conection
 *
 * @author Sena
 */
class Conection {

    protected $db;

    public static function getConexion() {

        $conn = NULL;

        try {
            $conn = new PDO("mysql:host=localhost;dbname=proyectophp", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        return $conn;
    }

}

$miCone = Conection::getConexion();

if ($miCone != null) {
    echo 'ok';
} else {
    echo 'okno';
}
