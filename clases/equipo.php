<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipo
 *
 * @author cetecom
 */
class equipo {
    
    private $idequipo;
    private $codigo;
    private $nombre;
    
    function __construct($idequipo, $codigo, $nombre) {
        $this->idequipo = $idequipo;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    
    function getIdequipo() {
        return $this->idequipo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdequipo($idequipo) {
        $this->idequipo = $idequipo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
